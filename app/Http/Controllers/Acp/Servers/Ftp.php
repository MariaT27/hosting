<?php namespace App\Http\Controllers\Acp\Servers;

use App\Server;
use Ivacuum\Generic\Controllers\Acp\BaseController;
use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Ftp as FtpAdapter;

class Ftp extends BaseController
{
    protected $fs;

    public function index($id)
    {
        $server = $this->getModel($id);

        $this->initFs($server);

        $dir  = $this->request->input('dir', '/');
        $file = $this->request->input('file');

        $dirs = $files = [];
        $dir_up = ':';

        if ($dir && $dir != '/') {
            $dir_up = implode('/', explode('/', $dir, -1));
            $dir_up = !$dir_up ? '/' : $dir_up;
        }

        $contents = $this->fs->listContents($dir);

        foreach ($contents as $row) {
            if ($row['type'] == 'dir') {
                $dirs[] = $row;
            } elseif ($row['type'] == 'file') {
                $files[] = $row;
            }
        }

        return view($this->view, compact('dir', 'dir_up', 'dirs', 'file', 'files', 'server'));
    }

    public function dirPost($id)
    {
        $server = $this->getModel($id);

        $this->initFs($server);

        $this->validate($this->request, [
            'mail' => 'empty',
            'dir'  => 'required',
            'path' => 'required',
        ]);

        extract($this->request->only('dir', 'path'));

        $this->fs->createDir("{$path}/{$dir}");

        return redirect("/acp/servers/{$server->id}/ftp?dir={$path}");
    }

    public function filePost($id)
    {
        $server = $this->getModel($id);

        $this->initFs($server);

        $this->validate($this->request, [
            'mail' => 'empty',
            'file' => 'required',
            'path' => 'required',
        ]);

        extract($this->request->only('file', 'path'));

        $this->fs->write("{$path}/{$file}", '');

        return redirect("/acp/servers/{$server->id}/ftp?dir={$path}");
    }

    public function source($id)
    {
        $server = $this->getModel($id);

        $this->initFs($server);

        $file = $this->request->input('file');

        $source = $this->fs->read($file);

        $dir_up = dirname($file);
        $dir_up = $dir_up == '.' ? '/' : $dir_up;

        return view($this->view, compact('dir_up', 'file', 'server', 'source'));
    }

    public function sourcePost($id)
    {
        $server = $this->getModel($id);

        $this->initFs($server);

        $this->validate($this->request, [
            'mail' => 'empty',
            'file' => 'required',
        ]);

        extract($this->request->only('file', 'source'));

        $source = str_replace(["\r\n", "\r"], "\n", $source);

        $this->fs->update($file, $source);

        return redirect("/acp/servers/{$server->id}/ftp?dir=" . dirname($file));
    }

    public function uploadPost($id)
    {
        $server = $this->getModel($id);

        $this->initFs($server);

        $this->validate($this->request, [
            'mail' => 'empty',
            'file' => 'required',
            'path' => 'required',
        ]);

        $path = $this->request->input('path');
        $file = $this->request->file('file');
        $stream = fopen($file->getRealPath(), 'r+');
        $this->fs->writeStream($path . '/' . $file->getClientOriginalName(), $stream);
        fclose($stream);

        return redirect("/acp/servers/{$server->id}/ftp?dir={$path}");
    }

    protected function getModel($id)
    {
        return Server::findOrFail($id);
    }

    protected function initFs(Server $server)
    {
        $this->fs = new Filesystem(new FtpAdapter([
            'host'     => $server->ftp_host ?: $server->host,
            'username' => $server->ftp_user,
            'password' => $server->ftp_pass,
            'port'     => 21,
            'root'     => $server->ftp_root ?: '/',
            'passive'  => true,
            'ssl'      => false,
            'timeout'  => 5,
        ]));
    }
}

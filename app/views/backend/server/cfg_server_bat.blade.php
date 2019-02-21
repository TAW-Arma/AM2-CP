@ECHO OFF
START "instance_{{ $server->name }}" /D C:\Steam\steamapps\common\Arma 3 Server "C:\Steam\steamapps\common\Arma 3 Server\arma3server_x64.exe" -enableHT -exThreads={{ $server->ex_threads }} -maxMem={{ $server->memory }} -server -nosplash -nosound -noPause -noCB -loadMissionToMemory -malloc=tbb4malloc_bi -name=ArmA3 "-profiles=C:\Steam\steamapps\common\Arma 3 Server\instances\{{ $server->name }}\profile" "-pid=C:\Steam\steamapps\common\Arma 3 Server\instances\{{ $server->name }}\server.pid" "-config=C:\Steam\steamapps\common\Arma 3 Server\instances\{{ $server->name }}\server.cfg" "-cfg=C:\Steam\steamapps\common\Arma 3 Server\instances\{{ $server->name }}\basic.cfg" "-par=C:\Steam\steamapps\common\Arma 3 Server\instances\{{ $server->name }}\parameters.cfg" "-bepath=C:\Steam\steamapps\common\Arma 3 Server\instances\{{ $server->name }}\battleye" -port={{ $server->port }}2 -filePatching {{ $server->parameters }}
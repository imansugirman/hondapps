<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
<li class="header">Admin ( SA )</li>
<li><a href='{{ url(config('backpack.base.route_prefix', 'admin').'/mobil') }}'><i class='fa fa-hdd-o'></i> <span>Mobil</span></a></li>

<li class="header">Teknisi</li>
<li><a href='{{ url(config('backpack.base.route_prefix', 'admin').'/mobil') }}'><i class='fa fa-hdd-o'></i> <span>Mobil</span></a></li>
<li><a href='{{ url(config('backpack.base.route_prefix', 'admin').'/process') }}'><i class='fa fa-hdd-o'></i> <span>Proses</span></a></li>


<li class="header">Data Default Administrator</li>
<li class="treeview">
  <a href="#"><i class="fa fa-group"></i> <span>Data Bank</span> <i class="fa fa-angle-left pull-right"></i></a>
  <ul class="treeview-menu">
    <li><a href="{{ backpack_url('qs') }}"><i class="fa fa-user"></i> <span>QS</span></a></li>
    <li><a href="{{ backpack_url('pm') }}"><i class="fa fa-user"></i> <span>PM</span></a></li>
    <li><a href="{{ backpack_url('gr') }}"><i class="fa fa-user"></i> <span>GR</span></a></li>
    <li><a href="{{ backpack_url('part') }}"><i class="fa fa-user"></i> <span>Konfirmasi part</span></a></li>
    <li><a href="{{ backpack_url('tambahan') }}"><i class="fa fa-user"></i> <span>Pekerjaan Tambahan</span></a></li>
    <li><a href="{{ backpack_url('sbalance') }}"><i class="fa fa-user"></i> <span>Spooring + Balancing</span></a></li>
    <li><a href="{{ backpack_url('inspect') }}"><i class="fa fa-user"></i> <span>Inspect</span></a></li>
    <li><a href="{{ backpack_url('cuci') }}"><i class="fa fa-user"></i> <span>Cuci</span></a></li>
    <li><a href="{{ backpack_url('delivery') }}"><i class="fa fa-user"></i> <span>Delivery</span></a></li>
  </ul>
</li>

<li class="header">Private Web Master</li>
<li><a href="{{ backpack_url('elfinder') }}"><i class="fa fa-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>
<li class="treeview">
  <a href="#"><i class="fa fa-group"></i> <span>User Manager</span> <i class="fa fa-angle-left pull-right"></i></a>
  <ul class="treeview-menu">
    <li><a href="{{ backpack_url('user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
    <li><a href="{{ backpack_url('role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
    <li><a href="{{ backpack_url('permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
  </ul>
</li>
<li><a href='{{ url(config('backpack.base.route_prefix', 'admin').'/backup') }}'><i class='fa fa-hdd-o'></i> <span>Backups</span></a></li>
<li><a href='{{ url(config('backpack.base.route_prefix', 'admin').'/log') }}'><i class='fa fa-terminal'></i> <span>Logs</span></a></li>

<ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        @if (auth()->user()->level==1)
        <li class="{{ request()->is('admin') ? 'active' : '' }}"><a href="/admin"><i class="fa fa-book"></i> <span>Lowongan Kerja</span></a></li>
        <li class="{{ request()->is('admin/event') ? 'active' : '' }}"><a href="/admin/event"><i class="fa fa-book"></i> <span>Event</span></a></li>
        <li class="{{ request()->is('admin/berita') ? 'active' : '' }}"><a href="/admin/berita"><i class="fa fa-book"></i> <span>Berita</span></a></li>

        @elseif (auth()->user()->level==2)
        <li><a href="/perusahaaninput"><i class="fa fa-book"></i> <span>Input Lowongan Kerja</span></a></li>
        @endif
        </li>
</ul> 
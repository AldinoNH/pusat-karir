<ul class="navbar-nav mr-auto">
        <li class="{{ request()->is('/') ? 'active' : '' }}">
        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Dashboard <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle {{ request()->is('lowongankerja') ? 'active' : '' }} {{ request()->is('arsiplowongan') ? 'active' : '' }}" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
          Lowongan Kerja
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item {{ request()->is('lowongankerja') ? 'active' : '' }}" href="/lowongankerja">Lowongan Kerja <span class="sr-only">(current)</span></a>
          <a class="dropdown-item {{ request()->is('arsiplowongan') ? 'active' : '' }}" href="/arsiplowongan">Arsip Lowongan</a>
        </div>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle {{ request()->is('upcomingevent') ? 'active' : '' }}{{ request()->is('event') ? 'active' : '' }}" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
          Event
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item {{ request()->is('upcomingevent') ? 'active' : '' }}" href="/upcomingevent">Upcoming Event</a>
          <a class="dropdown-item {{ request()->is('event') ? 'active' : '' }}" href="/event">Past Event</a>
        </div>
        </li>
</ul>

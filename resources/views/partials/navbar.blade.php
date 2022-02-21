<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link {{ ($title === "home" ? 'active' : '') }}" aria-current="page" href="/">Home</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
            aria-expanded="false">Products</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/category/marbel-edu-games">Marbel - Educational Games</a></li>
            <li><a class="dropdown-item" href="/category/marbel-and-friends-kids-games">Marbel & Friends - Kids
                    Games</a></li>
            <li><a class="dropdown-item" href="/category/riri-story-books">Riri - Story Books</a></li>
            <li><a class="dropdown-item" href="/category/kolak-kids-songs">Kolak - Kids Songs</a></li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ ($title === "news" ? 'active' : '') }}" href="/news ">News</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
            aria-expanded="false">Program</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/program/karir">Karir</a></li>
            <li><a class="dropdown-item" href="/program/magang">Magang</a></li>
            <li><a class="dropdown-item" href="/program/kunjungan-industri">Kunjungan Industri</a></li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ ($title === "aboutus" ? 'active' : '') }}" href="/about-us">About Us</a>
    </li>
</ul>

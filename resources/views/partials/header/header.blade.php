<header>
    <div class="container">
        <figure>
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </figure>

        <nav>
            <ul>
                @foreach ($navLinks as $item)
                    <li>
                        <a href="#">{{ $item }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>

<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;

        height: 12vh;

        figure {
            height: 100%;
            padding: 0.5rem;

            img {
                height: 100%;
            }
        }

        nav {
            height: 100%;

            ul {
                display: flex;
                gap: 1rem;
                height: 100%;
                
                li {
                    display: flex;
                    align-items: center;

                    list-style-type: none;
                    text-transform: uppercase;
                    height: 100%;
                    border-bottom: 3px solid transparent;

                    a {
                        text-decoration: none;
                        color: #1c1c1c;

                        &:hover {
                            color: #0082f9;
                        }
                    }

                }
            }
        }
    }
</style>
<footer>
    <div class="container">
        <nav>
            <div class="column">
                <div>
                    <h3>{{ $footerNavSections[0]['title'] }}</h3>
                    <ul>
                        @foreach ($footerNavSections[0]['links'] as $item)
                            <li>
                                <a href="#">{{ $item }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="column">
                    <h3>{{ $footerNavSections[1]['title'] }}</h3>
                    <ul>
                        @foreach ($footerNavSections[1]['links'] as $item)
                            <li>
                                <a href="#">{{ $item }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="column">
                <h3>{{ $footerNavSections[2]['title'] }}</h3>
                <ul>
                    @foreach ($footerNavSections[2]['links'] as $item)
                        <li>
                            <a href="#">{{ $item }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="column">
                <h3>{{ $footerNavSections[3]['title'] }}</h3>
                <ul>
                    @foreach ($footerNavSections[3]['links'] as $item)
                        <li>
                            <a href="#">{{ $item }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </nav>

        <div>
            <figure>
        
            </figure>
        </div>

    </div>
</footer>
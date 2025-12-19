    <article>
        <h3>{{ $title }}</h3>
        <p>{{ Str::limit($desc, 30, end: "...") }}</p>
    </article>

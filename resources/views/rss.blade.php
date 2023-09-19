<?=
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
?>
<rss version="2.0">
    <channel>
        <title><![CDATA[ https://mfhscholarship.com/ ]]></title>
        <link><![CDATA[ https://mfhscholarship.com/feed ]]></link>
        <description><![CDATA[ Explore a world of scholarship opportunities to fund your education. Discover various scholarships, grants, and financial aids to pursue your academic dreams and shape a brighter future. ]]></description>
        <language>en</language>
        <pubDate>{{ now() }}</pubDate>
  


        @foreach($posts as $post)
            <item>
                <title><![CDATA[{{ $post->scholarship_name }}]]></title>
                <link>{{ url($post->scholarship_slug) }}</link>
                <description><![CDATA[{!! $post->scholarship_description !!}]]></description>
                <author><![CDATA[M.Rohan]]></author>
                <guid>{{ $post->id }}</guid>
                <pubDate>{{ $post->created_at->toRssString() }}</pubDate>
            </item>
        @endforeach
    </channel>
</rss>
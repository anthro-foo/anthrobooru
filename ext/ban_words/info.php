<?php

declare(strict_types=1);

namespace Shimmie2;

final class BanWordsInfo extends ExtensionInfo
{
    public const KEY = "ban_words";

    public string $key = self::KEY;
    public string $name = "Word Ban";
    public string $url = self::SHIMMIE_URL;
    public array $authors = self::SHISH_AUTHOR;
    public string $license = self::LICENSE_GPLV2;
    public string $description = "For stopping spam and other abuse in comments, tags and sources";
    public ?string $documentation =
        "Allows an administrator to ban certain words
from comments, tags and sources. This can be a very simple but effective way
of stopping spam; just add \"viagra\", \"porn\", etc to the
banned words list.
<p>Regex bans are also supported, allowing more complicated
bans like <code>/http:.*\.cn\//</code> to block links to
chinese websites, or <code>/.*?http.*?http.*?http.*?http.*?/</code>
to block comments with four (or more) links in.
<p>Note that for non-regex matches, only whole words are
matched, eg banning \"sex\" would block the comment \"get free
sex call this number\", but allow \"This is a photo of Bob
from Essex\"";
    public ExtensionCategory $category = ExtensionCategory::MODERATION;
}

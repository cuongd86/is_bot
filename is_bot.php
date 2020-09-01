<?php

function is_bot($sistema){
 // bots de buscadores
    $bots = array(
         'Googlebot'
        , 'Baiduspider'
        , 'ia_archiver'
        , 'R6_FeedFetcher'
        , 'NetcraftSurveyAgent'
        , 'Sogou web spider'
        , 'bingbot'
        , 'Yahoo! Slurp'
        , 'facebookexternalhit'
        , 'PrintfulBot'
        , 'msnbot'
        , 'Twitterbot'
        , 'UnwindFetchor'
        , 'urlresolver'
        , 'Butterfly'
        , 'TweetmemeBot'
        , 'PaperLiBot'
        , 'MJ12bot'
        , 'AhrefsBot'
        , 'Exabot'
        , 'Ezooms'
        , 'YandexBot'
        , 'SearchmetricsBot'
        , 'picsearch'
        , 'TweetedTimes Bot'
        , 'QuerySeekerSpider'
        , 'ShowyouBot'
        , 'woriobot'
        , 'merlinkbot'
        , 'BazQuxBot'
        , 'Kraken'
        , 'SISTRIX Crawler'
        , 'R6_CommentReader'
        , 'magpie-crawler'
        , 'GrapeshotCrawler'
        , 'PercolateCrawler'
        , 'MaxPointCrawler'
        , 'R6_FeedFetcher'
        , 'NetSeer crawler'
        , 'grokkit-crawler'
        , 'SMXCrawler'
        , 'PulseCrawler'
        , 'Y!J-BRW'
        , '80legs.com/webcrawler'
        , 'Mediapartners-Google'
        , 'Spinn3r'
        , 'InAGist'
        , 'Python-urllib'
        , 'NING'
        , 'TencentTraveler'
        , 'Feedfetcher-Google'
        , 'mon.itor.us'
        , 'spbot'
        , 'Feedly'
        , 'bitlybot'
        , 'ADmantX Platform'
        , 'Niki-Bot'
        , 'Pinterest'
        , 'python-requests'
        , 'DotBot'
        , 'HTTP_Request2'
        , 'linkdexbot'
        , 'A6-Indexer'
        , 'Baiduspider'
        , 'TwitterFeed'
        , 'Microsoft Office'
        , 'Pingdom'
        , 'BTWebClient'
        , 'KatBot'
        , 'SiteCheck'
        , 'proximic'
        , 'Sleuth'
        , 'Abonti'
        , '(BOT for JCE)'
        , 'Baidu'
        , 'Tiny Tiny RSS'
        , 'newsblur'
        , 'updown_tester'
        , 'linkdex'
        , 'baidu'
        , 'searchmetrics'
        , 'genieo'
        , 'majestic12'
        , 'spinn3r'
        , 'profound'
        , 'domainappender'
        , 'VegeBot'
        , 'terrykyleseoagency.com'
        , 'CommonCrawler Node'
        , 'AdlesseBot'
        , 'metauri.com'
        , 'libwww-perl'
        , 'rogerbot-crawler'
        , 'MegaIndex.ru'
    		, 'ltx71'
    		, 'Qwantify'
    		, 'Traackr.com'
    		, 'Re-Animator Bot'
        , 'Pcore-HTTP'
        , 'BoardReader'
        , 'omgili'
        , 'okhttp'
        , 'CCBot'
        , 'Java/1.8'
        , 'semrush.com'
        , 'feedbot'
        , 'CommonCrawler'
        , 'AdlesseBot'
        , 'MetaURI'
        , 'ibwww-perl'
        , 'rogerbot'
        , 'MegaIndex'
        , 'BLEXBot'
        , 'FlipboardProxy'
        , 'techinfo@ubermetrics-technologies.com'
        , 'trendictionbot'
        , 'Mediatoolkitbot'
        , 'trendiction'
        , 'ubermetrics'
        , 'ScooperBot'
        , 'TrendsmapResolver'
        , 'Nuzzel'
        , 'Go-http-client'
        , 'Applebot'
        , 'LivelapBot'
        , 'GroupHigh'
        , 'SemrushBot'
        , 'ltx71'
        , 'commoncrawl'
        , 'istellabot'
        , 'DomainCrawler'
        , 'cs.daum.net'
        , 'StormCrawler'
        , 'GarlikCrawler'
        , 'The Knowledge AI'
        , 'getstream.io/winds'
        , 'YisouSpider'
        , 'archive.org_bot'
        , 'semantic-visions.com'
        , 'FemtosearchBot'
        , '360Spider'
        , 'linkfluence.com'
        , 'glutenfreepleasure.com'
        , 'Gluten Free Crawler'
        , 'YaK/1.0'
        , 'Cliqzbot'
        , 'app.hypefactors.com'
        , 'axios'
        , 'semantic-visions.com'
        , 'webdatastats.com'
        , 'schmorp.de'
        , 'SEOkicks'
        , 'DuckDuckBot'
        , 'Barkrowler'
        , 'ZoominfoBot'
        , 'Linguee Bot'
        , 'Mail.RU_Bot'
        , 'OnalyticaBot'
        , 'Linguee Bot'
        , 'admantx-adform'
        , 'Buck/2.2'
        , 'Barkrowler'
        , 'Zombiebot'
        , 'Nutch'
        , 'SemanticScholarBot'
        , 'Jetslide'
        , 'scalaj-http'
        , 'XoviBot'
        , 'sysomos.com'
        , 'PocketParser'
        , 'newspaper'
        , 'serpstatbot'
        , 'MetaJobBot'
        , 'SeznamBot/3.2'
        , 'VelenPublicWebCrawler/1.0'
        , 'WordPress.com mShots'
        , 'adscanner'
        , 'BacklinkCrawler'
        , 'netEstate NE Crawler'
        , 'Astute SRM'
        , 'GigablastOpenSource/1.0'
        , 'DomainStatsBot'
        , 'Winds: Open Source RSS & Podcast'
        , 'dlvr.it'
        , 'BehloolBot'
        , '7Siters'
        , 'AwarioSmartBot'
        , 'Apache-HttpClient/5'
        , 'Seekport Crawler'
        , 'AHC/2.1'
        , 'eCairn-Grabber'
        , 'mediawords bot'
        , 'PHP-Curl-Class'
        , 'Scrapy'
        , 'curl/7'
        , 'Blackboard'
        , 'NetNewsWire'
        , 'node-fetch'
        , 'admantx'
        , 'metadataparser'
        , 'Domains Project'
        , 'SerendeputyBot'
        , 'Moreover'
        , 'DuckDuckGo' 
        , 'monitoring-plugins'
        , 'Selfoss'
        , 'Adsbot'
        , 'acebookexternalhit'
        , 'SpiderLing'
        , 'SiteCheckerBotCrawler/1.0'
        );

 // si lo encuentra devuelve true, si no, false
    foreach($bots as $b)
        {
            if( stripos( $sistema, $b ) !== false ) return true;
        }
    return false;
}

?>

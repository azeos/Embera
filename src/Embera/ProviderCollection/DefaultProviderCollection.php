<?php
/**
 * DefaultProviderCollection.php
 *
 * @package Embera
 * @author Michael Pratt <yo@michael-pratt.com>
 * @link   http://www.michael-pratt.com/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Embera\ProviderCollection;

/**
 * Basically its a wrapper for the ProvidercollectionAdapter but defines the
 * default providers supported by the library
 */
class DefaultProviderCollection extends ProviderCollectionAdapter
{
    /** inline {@inheritdoc} */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
        $this->registerProvider([
            'TwentyThreeHq',
            'ActBlue',
            'Adways',
            'Altru',
            'AmCharts',
            'Animoto',
            'AnnieMusic',
            'Apester',
            'Archivos',
            'Audioboom',
            'AudioClip',
            'Audiomack',
            'Avocode',
            'Backtracks',
            'BeautifulAI',
            'BlackfireIO',
            'Blogcast',
            'Buttondown',
            'Byzart',
            'Ceros',
            'ChartBlocks',
            'Chirbit',
            'CircuitLab',
            'Clyp',
            'CocoCorp',
            'CodeHS',
            'CodePen',
            'Codepoints',
            'CodeSandbox',
            'Commaful',
            'Coub',
            'Cueup',
            'Curated',
            'Datawrapper',
            'DailyMotion',
            'Deseretnews',
            'Deviantart',
            'Didacte',
            'Digiteka',
            'DocDroid',
            'DotSUB',
            'EduMedia',
            'Embedery',
            'Ethfiddle',
            'Eyrie',
            'Facebook',
            'Fader',
            'FaithLifeTV',
            'Fitapp',
            'FITE',
            'Flickr',
            'Flourish',
            'GeographUk',
            'GeographCI',
            'GeographDE',
            'GetShow',
            'GettyImages',
            'Gfycat',
            'Giphy',
            'GloriaTV',
            'Gong',
            'Grain',
            'Gyazo',
            'Hearthis',
            'HiHaHo',
            'HippoVideo',
            'Huffduffer',
            'iFixit',
            'Idomoo',
            'IHeartRadio',
            'Infogram',
            'Infoveave',
            'Injurymap',
            'Inoreader',
            'Instagram',
            'InsticatorContentEngagementUnit',
            'Issuu',
            'Jovian',
            'KakaoTV',
            'Kickstarter',
            'Kidoju',
            'KirimEmail',
            'Kit',
            'Kmdr',
            'Knacki',
            'LearningApps',
            'LillePod',
            'Livestream',
            'Loom',
            'LottieFiles',
            'Ludus',
            'Lumiere',
            'Matterport',
            'MediaLab',
            'MedienArchivKuenste',
            'MermaidInk',
            'Meetup',
            'MessesInfo',
            'MicrosoftStream',
            'Minerva',
            'MixCloud',
            'ModeloIO',
            'MusicboxManiacs',
            'Namchey',
            'Nanoo',
            'NaturalAtlas',
            'Nfb',
            'NoPaste',
            'Omniscope',
            'OmnyStudio',
            'OnSizzle',
            'OraTV',
            'Orbitvu',
            'Outplayed',
            'OverflowIO',
            'Oz',
            'Padlet',
            'Pastery',
            'Pinpoll',
            'Pixdor',
            'Playbuzz',
            'Podbean',
            'PolariShare',
            'Polldaddy',
            'Portfolium',
            'Posixion',
            'Prezi',
            'RadioPublic',
            'Rcvis',
            'Reddit',
            'ReleaseWire',
            'Replit',
            'ReverbNation',
            'Roomshare',
            'RoosterTeeth',
            'Rumble',
            'RunKit',
            'Saooti',
            'SapoVideos',
            'ScreenNine',
            'Screencast',
            'ScribbleMaps',
            'Scribd',
            'SendToNews',
            'Shortnote',
            'Shoudio',
            'ShowTheWay',
            'Simplecast',
            'Sketchfab',
            'Slideshare',
            'SmashNotes',
            'Smugmug',
            'SocialExplorer',
            'SongLink',
            'SoundCloud',
            'SpeakerDeck',
            'Spotful',
            'Spotify',
            'Spreaker',
            'SproutVideo',
            'StandfordDigitalRepository',
            'Streamable',
            'Subscribi',
            'Sudomemo',
            'Sutori',
            'Sway',
            'Ted',
            'TheNewYorkTimes',
            'Tickcounter',
            'TikTok',
            'Toornament',
            'TourHero',
            'Tumblr',
            'Tuxx',
            'Tvcf',
            'Twitter',
            'Typecast',
            'Typlog',
            'UniversitePantheonSorbonne',
            'UniversityCambridgeMap',
            'UpecPod',
            'Uppy',
            'UstreamTV',
            'Ustudio',
            'Veer',
            'Verse',
            'Vidyard',
            'Vimeo',
            'Viously',
            'Vlipsy',
            'Vlive',
            'WaveVideo',
            'WolframCloud',
            'VoxSnap',
            'Wistia',
            'Wizer',
            'Wokwi',
            'Wordpress',
            'Wordwall',
            'Youtube',
            'Zeplin',
            'Zingsoft',
            'ZnipeTV',
            'Zoomable',
        ]);
    }
}

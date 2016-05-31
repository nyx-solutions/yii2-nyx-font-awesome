<?php

    namespace nox\widgets\fonts\fontAwesome;

    use yii\base\Widget;
    use common\helpers\HtmlHelper;

    /**
     * Class FontAwesome
     *
     * @category     Widget
     * @author       Jonatas Sas
     *
     * @package      nox\widgets\fonts
     *
     * @todo-project Implementar o stack
     */
    class FontAwesome extends Widget
    {
        const FLIP_VERTICAL = 1;
        const FLIP_HORIZONTAL = 2;

        const SIZE_NR = '';
        const SIZE_LG = 'lg';
        const SIZE_2X = '2x';
        const SIZE_3X = '3x';
        const SIZE_4X = '4x';
        const SIZE_5X = '5x';

        const ROTATE_90 = '90';
        const ROTATE_180 = '180';
        const ROTATE_270 = '270';

        /**
         * @var array
         */
        protected $icons = [
            'adjust',
            'adn',
            'align-center',
            'align-justify',
            'align-left',
            'align-right',
            'ambulance',
            'anchor',
            'android',
            'angellist',
            'angle-double-down',
            'angle-double-left',
            'angle-double-right',
            'angle-double-up',
            'angle-down',
            'angle-left',
            'angle-right',
            'angle-up',
            'apple',
            'archive',
            'area-chart',
            'arrow-circle-down',
            'arrow-circle-left',
            'arrow-circle-o-down',
            'arrow-circle-o-left',
            'arrow-circle-o-right',
            'arrow-circle-o-up',
            'arrow-circle-right',
            'arrow-circle-up',
            'arrow-down',
            'arrow-left',
            'arrow-right',
            'arrow-up',
            'arrows',
            'arrows-alt',
            'arrows-h',
            'arrows-v',
            'asterisk',
            'at',
            'automobile',
            'backward',
            'ban',
            'bank',
            'bar-chart',
            'bar-chart-o',
            'barcode',
            'bars',
            'bed',
            'beer',
            'behance',
            'behance-square',
            'bell',
            'bell-o',
            'bell-slash',
            'bell-slash-o',
            'bicycle',
            'binoculars',
            'birthday-cake',
            'bitbucket',
            'bitbucket-square',
            'bitcoin',
            'bold',
            'bolt',
            'bomb',
            'book',
            'bookmark',
            'bookmark-o',
            'briefcase',
            'btc',
            'bug',
            'building',
            'building-o',
            'bullhorn',
            'bullseye',
            'bus',
            'buysellads',
            'cab',
            'calculator',
            'calendar',
            'calendar-o',
            'camera',
            'camera-retro',
            'car',
            'caret-down',
            'caret-left',
            'caret-right',
            'caret-square-o-down',
            'caret-square-o-left',
            'caret-square-o-right',
            'caret-square-o-up',
            'caret-up',
            'cart-arrow-down',
            'cart-plus',
            'cc',
            'cc-amex',
            'cc-discover',
            'cc-mastercard',
            'cc-paypal',
            'cc-stripe',
            'cc-visa',
            'certificate',
            'chain',
            'chain-broken',
            'check',
            'check-circle',
            'check-circle-o',
            'check-square',
            'check-square-o',
            'chevron-circle-down',
            'chevron-circle-left',
            'chevron-circle-right',
            'chevron-circle-up',
            'chevron-down',
            'chevron-left',
            'chevron-right',
            'chevron-up',
            'child',
            'circle',
            'circle-o',
            'circle-o-notch',
            'circle-thin',
            'clipboard',
            'clock-o',
            'close',
            'cloud',
            'cloud-download',
            'cloud-upload',
            'cny',
            'code',
            'code-fork',
            'codepen',
            'coffee',
            'cog',
            'cogs',
            'columns',
            'comment',
            'comment-o',
            'comments',
            'comments-o',
            'compass',
            'compress',
            'connectdevelop',
            'copy',
            'copyright',
            'credit-card',
            'crop',
            'crosshairs',
            'css3',
            'cube',
            'cubes',
            'cut',
            'cutlery',
            'dashboard',
            'dashcube',
            'database',
            'dedent',
            'delicious',
            'desktop',
            'deviantart',
            'diamond',
            'digg',
            'dollar',
            'dot-circle-o',
            'download',
            'dribbble',
            'dropbox',
            'drupal',
            'edit',
            'eject',
            'ellipsis-h',
            'ellipsis-v',
            'empire',
            'envelope',
            'envelope-o',
            'envelope-square',
            'eraser',
            'eur',
            'euro',
            'exchange',
            'exclamation',
            'exclamation-circle',
            'exclamation-triangle',
            'expand',
            'external-link',
            'external-link-square',
            'eye',
            'eye-slash',
            'eyedropper',
            'facebook',
            'facebook-f',
            'facebook-official',
            'facebook-square',
            'fast-backward',
            'fast-forward',
            'fax',
            'female',
            'fighter-jet',
            'file',
            'file-archive-o',
            'file-audio-o',
            'file-code-o',
            'file-excel-o',
            'file-image-o',
            'file-movie-o',
            'file-o',
            'file-pdf-o',
            'file-photo-o',
            'file-picture-o',
            'file-powerpoint-o',
            'file-sound-o',
            'file-text',
            'file-text-o',
            'file-video-o',
            'file-word-o',
            'file-zip-o',
            'files-o',
            'film',
            'filter',
            'fire',
            'fire-extinguisher',
            'flag',
            'flag-checkered',
            'flag-o',
            'flash',
            'flask',
            'flickr',
            'floppy-o',
            'folder',
            'folder-o',
            'folder-open',
            'folder-open-o',
            'font',
            'forumbee',
            'forward',
            'foursquare',
            'frown-o',
            'futbol-o',
            'gamepad',
            'gavel',
            'gbp',
            'ge',
            'gear',
            'gears',
            'genderless',
            'gift',
            'git',
            'git-square',
            'github',
            'github-alt',
            'github-square',
            'gittip',
            'glass',
            'globe',
            'google',
            'google-plus',
            'google-plus-square',
            'google-wallet',
            'graduation-cap',
            'gratipay',
            'group',
            'h-square',
            'hacker-news',
            'hand-o-down',
            'hand-o-left',
            'hand-o-right',
            'hand-o-up',
            'hdd-o',
            'header',
            'headphones',
            'heart',
            'heart-o',
            'heartbeat',
            'history',
            'home',
            'hospital-o',
            'hotel',
            'html5',
            'ils',
            'image',
            'inbox',
            'indent',
            'info',
            'info-circle',
            'inr',
            'instagram',
            'institution',
            'ioxhost',
            'italic',
            'joomla',
            'jpy',
            'jsfiddle',
            'key',
            'keyboard-o',
            'krw',
            'language',
            'laptop',
            'lastfm',
            'lastfm-square',
            'leaf',
            'leanpub',
            'legal',
            'lemon-o',
            'level-down',
            'level-up',
            'life-bouy',
            'life-buoy',
            'life-ring',
            'life-saver',
            'lightbulb-o',
            'line-chart',
            'link',
            'linkedin',
            'linkedin-square',
            'linux',
            'list',
            'list-alt',
            'list-ol',
            'list-ul',
            'location-arrow',
            'lock',
            'long-arrow-down',
            'long-arrow-left',
            'long-arrow-right',
            'long-arrow-up',
            'magic',
            'magnet',
            'mail-forward',
            'mail-reply',
            'mail-reply-all',
            'male',
            'map-marker',
            'mars',
            'mars-double',
            'mars-stroke',
            'mars-stroke-h',
            'mars-stroke-v',
            'maxcdn',
            'meanpath',
            'medium',
            'medkit',
            'meh-o',
            'mercury',
            'microphone',
            'microphone-slash',
            'minus',
            'minus-circle',
            'minus-square',
            'minus-square-o',
            'mobile',
            'mobile-phone',
            'money',
            'moon-o',
            'mortar-board',
            'motorcycle',
            'music',
            'navicon',
            'neuter',
            'newspaper-o',
            'openid',
            'outdent',
            'pagelines',
            'paint-brush',
            'paper-plane',
            'paper-plane-o',
            'paperclip',
            'paragraph',
            'paste',
            'pause',
            'paw',
            'paypal',
            'pencil',
            'pencil-square',
            'pencil-square-o',
            'phone',
            'phone-square',
            'photo',
            'picture-o',
            'pie-chart',
            'pied-piper',
            'pied-piper-alt',
            'pinterest',
            'pinterest-p',
            'pinterest-square',
            'plane',
            'play',
            'play-circle',
            'play-circle-o',
            'plug',
            'plus',
            'plus-circle',
            'plus-square',
            'plus-square-o',
            'power-off',
            'print',
            'puzzle-piece',
            'qq',
            'qrcode',
            'question',
            'question-circle',
            'quote-left',
            'quote-right',
            'ra',
            'random',
            'rebel',
            'recycle',
            'reddit',
            'reddit-square',
            'refresh',
            'remove',
            'renren',
            'reorder',
            'repeat',
            'reply',
            'reply-all',
            'retweet',
            'rmb',
            'road',
            'rocket',
            'rotate-left',
            'rotate-right',
            'rouble',
            'rss',
            'rss-square',
            'rub',
            'ruble',
            'rupee',
            'save',
            'scissors',
            'search',
            'search-minus',
            'search-plus',
            'sellsy',
            'send',
            'send-o',
            'server',
            'share',
            'share-alt',
            'share-alt-square',
            'share-square',
            'share-square-o',
            'shekel',
            'sheqel',
            'shield',
            'ship',
            'shirtsinbulk',
            'shopping-cart',
            'sign-in',
            'sign-out',
            'signal',
            'simplybuilt',
            'sitemap',
            'skyatlas',
            'skype',
            'slack',
            'sliders',
            'slideshare',
            'smile-o',
            'soccer-ball-o',
            'sort',
            'sort-alpha-asc',
            'sort-alpha-desc',
            'sort-amount-asc',
            'sort-amount-desc',
            'sort-asc',
            'sort-desc',
            'sort-down',
            'sort-numeric-asc',
            'sort-numeric-desc',
            'sort-up',
            'soundcloud',
            'space-shuttle',
            'spinner',
            'spoon',
            'spotify',
            'square',
            'square-o',
            'stack-exchange',
            'stack-overflow',
            'star',
            'star-half',
            'star-half-empty',
            'star-half-full',
            'star-half-o',
            'star-o',
            'steam',
            'steam-square',
            'step-backward',
            'step-forward',
            'stethoscope',
            'stop',
            'street-view',
            'strikethrough',
            'stumbleupon',
            'stumbleupon-circle',
            'subscript',
            'subway',
            'suitcase',
            'sun-o',
            'superscript',
            'support',
            'table',
            'tablet',
            'tachometer',
            'tag',
            'tags',
            'tasks',
            'taxi',
            'tencent-weibo',
            'terminal',
            'text-height',
            'text-width',
            'th',
            'th-large',
            'th-list',
            'thumb-tack',
            'thumbs-down',
            'thumbs-o-down',
            'thumbs-o-up',
            'thumbs-up',
            'ticket',
            'times',
            'times-circle',
            'times-circle-o',
            'tint',
            'toggle-down',
            'toggle-left',
            'toggle-off',
            'toggle-on',
            'toggle-right',
            'toggle-up',
            'train',
            'transgender',
            'transgender-alt',
            'trash',
            'trash-o',
            'tree',
            'trello',
            'trophy',
            'truck',
            'try',
            'tty',
            'tumblr',
            'tumblr-square',
            'turkish-lira',
            'twitch',
            'twitter',
            'twitter-square',
            'umbrella',
            'underline',
            'undo',
            'university',
            'unlink',
            'unlock',
            'unlock-alt',
            'unsorted',
            'upload',
            'usd',
            'user',
            'user-md',
            'user-plus',
            'user-secret',
            'user-times',
            'users',
            'venus',
            'venus-double',
            'venus-mars',
            'viacoin',
            'video-camera',
            'vimeo-square',
            'vine',
            'vk',
            'volume-down',
            'volume-off',
            'volume-up',
            'warning',
            'wechat',
            'weibo',
            'weixin',
            'whatsapp',
            'wheelchair',
            'wifi',
            'windows',
            'won',
            'wordpress',
            'wrench',
            'xing',
            'xing-square',
            'yahoo',
            'yelp',
            'yen',
            'youtube',
            'youtube-play',
            'youtube-square'
        ];

        /**
         * @var array
         */
        protected $classes = [];

        /**
         * @var string
         */
        protected $realClasses = '';

        /**
         * @var string
         */
        public $tag = 'i';

        /**
         * @var string
         */
        public $class = 'fa';

        /**
         * @var string
         */
        public $prefix = 'fa-';

        /**
         * @var bool
         */
        public $spin = false;

        /**
         * @var bool
         */
        public $pulse = false;

        /**
         * @var bool
         */
        public $rotate = false;

        /**
         * @var bool
         */
        public $flip = false;

        /**
         * @var bool
         */
        public $border = false;

        /**
         * @var bool
         */
        public $square = false;

        /**
         * @var bool
         */
        public $fw = false;

        /**
         * @var string
         */
        public $icon = '';

        /**
         * @var string
         */
        public $size = self::SIZE_NR;

        /**
         * @var int
         */
        public $flipDirection = self::FLIP_VERTICAL;

        /**
         * @var int
         */
        public $rotateDegrees = self::ROTATE_90;

        /**
         * @var string
         */
        public $additionalClasses = '';

        /**
         * @inheritdoc
         */
        public function run()
        {
            $this->registerClasses();
            $this->register();

            $tag = trim(strtolower($this->tag));

            return HtmlHelper::tag($tag, '', ['class' => $this->realClasses]);
        }

        /**
         * @category registerClasses
         * @author   Jonatas Sas
         *
         * @return void
         *
         * @throws FontAwesomeException
         */
        protected function registerClasses()
        {
            $this->flipDirection = (int)$this->flipDirection;

            if (!in_array($this->flipDirection, [self::FLIP_VERTICAL, self::FLIP_HORIZONTAL])) {
                $this->flipDirection = self::FLIP_VERTICAL;
            }

            $this->size = (string)$this->size;

            if (!in_array($this->size, [
                self::SIZE_NR,
                self::SIZE_LG,
                self::SIZE_2X,
                self::SIZE_3X,
                self::SIZE_4X,
                self::SIZE_5X
            ])
            ) {
                $this->size = self::SIZE_NR;
            }

            $this->rotateDegrees = (int)$this->rotateDegrees;

            if (!in_array($this->rotateDegrees, [self::ROTATE_90, self::ROTATE_180, self::ROTATE_270])) {
                $this->rotateDegrees = self::ROTATE_90;
            }

            $this->classes = [];

            $this->classes[] = trim($this->class);

            if (empty($this->prefix)) {
                $this->prefix = 'fa-';
            }

            if (!preg_match('/\-$/', $this->prefix)) {
                $this->prefix .= '-';
            }

            if ((bool)$this->spin) {
                $this->classes[] = $this->prefix . 'spin';
            }

            if ((bool)$this->pulse) {
                $this->classes[] = $this->prefix . 'pulse';
            }

            if ((bool)$this->rotate) {
                $this->classes[] = $this->prefix . 'rotate-' . $this->rotateDegrees;
            }

            if ((bool)$this->flip) {
                $this->classes[] = $this->prefix . 'flip';
            }

            if ((bool)$this->border) {
                $this->classes[] = $this->prefix . 'border';
            }

            if ((bool)$this->square) {
                $this->classes[] = $this->prefix . 'square';
            }

            if ((bool)$this->fw) {
                $this->classes[] = $this->prefix . 'fw';
            }

            if (!empty($this->size)) {
                $this->classes[] = $this->prefix . $this->size;
            }

            $icon = $this->getIcon($this->icon);

            if (empty($icon)) {
                throw new FontAwesomeException();
            }

            $this->classes[] = $icon;

            $this->realClasses = implode(' ', $this->classes) . ((!empty($this->additionalClasses)) ? ' ' : '') . trim($this->additionalClasses);
        }

        /**
         * @return void
         */
        protected function register()
        {
            FontAwesomeAsset::register($this->view);
        }

        /**
         * @param string $icon
         *
         * @return string
         */
        protected function getIcon($icon)
        {
            $icon = trim((string)$icon);

            if (in_array($icon, $this->icons)) {
                return $this->prefix . $icon;
            }

            return '';
        }
    }

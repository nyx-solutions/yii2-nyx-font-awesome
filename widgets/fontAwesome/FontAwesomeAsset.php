<?php

    namespace nox\widgets\fonts\fontAwesome;

    use yii\web\AssetBundle;

    /**
     * Class FontAwesomeAsset
     *
     * @category AssetBundle
     * @author   Jonatas Sas
     *
     * @package  nox\widgets\fonts\fontAwesome
     */
    class FontAwesomeAsset extends AssetBundle
    {
        /**
         * @inheritdoc
         */
        public $sourcePath = '@common/widgets/fonts/fontAwesome/assets';

        /**
         * @inheritdoc
         */
        public $css = ['css/font-awesome.min.css'];

        /**
         * @inheritdoc
         */
        public $depends = ['yii\web\YiiAsset'];

        /**
         * @inheritdoc
         */
        public function init()
        {
            parent::init();
        }
    }

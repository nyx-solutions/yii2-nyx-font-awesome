<?php

    namespace nyx\widgets\fonts\fa\assets;

    use yii\web\AssetBundle;
    use yii\web\YiiAsset;

    /**
     * Class FontAwesomeAsset
     *
     * @category AssetBundle
     * @author   Jonatas Sas
     */
    class FontAwesomeAsset extends AssetBundle
    {
        /**
         * @inheritdoc
         */
        public function init()
        {
            $this->sourcePath = '@bower/fontawesome';
            $this->css        = ['css/font-awesome.min.css'];
            $this->depends    = [YiiAsset::class];

            parent::init();
        }
    }

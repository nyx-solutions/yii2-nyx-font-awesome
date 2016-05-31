<?php

    namespace nox\widgets\fonts\fontAwesome;

    use yii\base\Exception;

    /**
     * Class FontAwesomeAsset
     *
     * @category Exception
     * @author   Jonatas Sas
     *
     * @package  nox\widgets\fonts
     */
    class FontAwesomeException extends Exception
    {
        /**
         * @return string the user-friendly name of this exception
         */
        public function getName()
        {
            return 'FontAwesome Widget Icon not Found Exception';
        }
    }

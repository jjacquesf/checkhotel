<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "banner".
 *
 * @property int $id
 * @property string file_id
 * @property int $position
 * @property int $type
 */
class Banner extends \yii\db\ActiveRecord
{
    const TYPE_MAIN = 1;
    const TYPE_SPECIAL = 2;

    public $type_options = [
      self::TYPE_MAIN => 'Principal',
      self::TYPE_SPECIAL => 'Promoción',
    ];

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'banner';
    }

    public function behaviors()
    {
    	return [
    		[
    			'class' => 'mdm\upload\UploadBehavior',
    			'attribute' => 'file', // required, use to receive input file
    			'savedAttribute' => 'file_id', // optional, use to link model with saved file.
    			'uploadPath' => '@common/upload', // saved directory. default to '@runtime/upload'
                'autoSave' => true, // when true then uploaded file will be save before ActiveRecord::save()
                'autoDelete' => true, // when true then uploaded file will deleted before ActiveRecord::delete()
    		],
        [
    			'class' => 'mdm\upload\UploadBehavior',
    			'attribute' => 'file2', // required, use to receive input file
    			'savedAttribute' => 'file2_id', // optional, use to link model with saved file.
    			'uploadPath' => '@common/upload', // saved directory. default to '@runtime/upload'
                'autoSave' => true, // when true then uploaded file will be save before ActiveRecord::save()
                'autoDelete' => true, // when true then uploaded file will deleted before ActiveRecord::delete()
    		],
    	];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['position', 'type'], 'required'],
            [['position', 'type', 'file_id', 'file2_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'file_id' => 'Archivo Web',
            'file2_id' => 'Archivo Móvil',
            'position' => 'Posición',
            'type' => 'Tipo',
        ];
    }
}

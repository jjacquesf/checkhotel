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

    const STATUS_ACTIVE = 1;
    const STATUS_DISABLED = 2;

    public $type_options = [
      self::TYPE_MAIN => 'Principal',
      self::TYPE_SPECIAL => 'Promoción',
    ];

    public $status_options = [
      self::STATUS_ACTIVE => 'Activo',
      self::STATUS_DISABLED => 'Deshabilitado',
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
            [['position', 'type','name', 'status'], 'required'],
            [['position', 'type', 'file_id', 'file2_id','status'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Nombre',
            'file_id' => 'Img. Escritorio',
            'file2_id' => 'Img. Móvil',
            'position' => 'Posición',
            'type' => 'Tipo',
            'status' => 'Estado',
            'file' => 'Img. Escritorio',
            'file2' => 'Img. Móvil',
        ];
    }

    /**
     * Returns Banner models by type
     * @param integer Type of banner defined on type_options
     * @return array of Banner model
     */
    public static function getModels($type, $status)
    {
      return self::find()->where(['type' => $type])->andWhere(['status' => $status])->orderBy(['position' => SORT_ASC])->all();
    }
}

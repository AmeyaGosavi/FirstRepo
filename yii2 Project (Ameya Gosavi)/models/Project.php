<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "project".
 *
 * @property int $project_id
 * @property string $project_title
 * @property string $project_description
 * @property string $created_at
 *
 * @property Modules[] $modules
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_title', 'project_description'], 'required'],
            [['project_description'], 'string'],
            [['created_at'], 'safe'],
            [['project_title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'project_id' => 'Project ID',
            'project_title' => 'Project Title',
            'project_description' => 'Project Description',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Modules]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getModules()
    {
        return $this->hasMany(Modules::className(), ['project_id' => 'project_id']);
    }
}

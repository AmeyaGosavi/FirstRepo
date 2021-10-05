<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "modules".
 *
 * @property int $module_id
 * @property string $module_title
 * @property string $module_description
 * @property int $project_id
 * @property string $created_at
 *
 * @property Project $project
 */
class Modules extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'modules';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['module_title', 'module_description', 'project_id'], 'required'],
            [['module_description'], 'string'],
            [['project_id'], 'integer'],
            [['created_at'], 'safe'],
            [['module_title'], 'string', 'max' => 255],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::className(), 'targetAttribute' => ['project_id' => 'project_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'module_id' => 'Module ID',
            'module_title' => 'Module Title',
            'module_description' => 'Module Description',
            'project_id' => 'Project ID',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Project]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProject()
    {
        return $this->hasOne(Project::className(), ['project_id' => 'project_id']);
    }
}

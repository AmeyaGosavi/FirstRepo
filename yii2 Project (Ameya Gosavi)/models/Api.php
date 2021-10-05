<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "api".
 *
 * @property int $id
 * @property int|null $project_id
 * @property int|null $module_id
 * @property string $url
 * @property string $title
 * @property string $description
 * @property string $method
 * @property string $request
 * @property string $response
 * @property string $created_at
 *
 * @property Modules $module
 * @property Project $project
 */
class Api extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'api';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['project_id', 'module_id'], 'integer'],
            [['url', 'title', 'description', 'method', 'request', 'response'], 'required'],
            [['description'], 'string'],
            [['created_at'], 'safe'],
            [['url', 'title', 'method', 'request', 'response'], 'string', 'max' => 255],
            [['module_id'], 'exist', 'skipOnError' => true, 'targetClass' => Modules::className(), 'targetAttribute' => ['module_id' => 'module_id']],
            [['project_id'], 'exist', 'skipOnError' => true, 'targetClass' => Project::className(), 'targetAttribute' => ['project_id' => 'project_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'project_id' => 'Project ID',
            'module_id' => 'Module ID',
            'url' => 'Url',
            'title' => 'Title',
            'description' => 'Description',
            'method' => 'Method',
            'request' => 'Request',
            'response' => 'Response',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Module]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getModule()
    {
        return $this->hasOne(Modules::className(), ['module_id' => 'module_id']);
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

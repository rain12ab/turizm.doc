<?php

namespace frontend\models;

use yii\base\Model;
use Yii;
use yii\data\ActiveDataProvider;
use frontend\models\Indoc;

/**
 * IndocSearch represents the model behind the search form of `frontend\models\Indoc`.
 */
class IndocSearch extends Indoc
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'main_ijro', 'status'], 'integer'],
            [['our_number', 'guest_number', 'file', 'date_ijro', 'ijrochilar', 'created_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {   
        if(Yii::$app->user->identity->role == 1)
            {
                $query = Indoc::find()->where(['main_ijro' => Yii::$app->user->identity->id]);
            }
        else
            {
                $query = Indoc::find();
            }
        

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'date_ijro' => $this->date_ijro,
            'main_ijro' => $this->main_ijro,
            'status' => $this->status,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'our_number', $this->our_number])
            ->andFilterWhere(['like', 'guest_number', $this->guest_number])
            ->andFilterWhere(['like', 'file', $this->file])
            ->andFilterWhere(['like', 'ijrochilar', $this->ijrochilar]);

        return $dataProvider;
    }
}

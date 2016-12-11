<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Drugs;

/**
 * DrugsSearch represents the model behind the search form about `app\models\Drugs`.
 */
class DrugsSearch extends Drugs
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'homeopathy', 'status'], 'integer'],
            [['url', 'title', 'latin', 'pokazaniya', 'protivopokazaniya', 'beremennost', 'pobochnye', 'content'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Drugs::find();

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
            'homeopathy' => $this->homeopathy,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'latin', $this->latin])
            ->andFilterWhere(['like', 'pokazaniya', $this->pokazaniya])
            ->andFilterWhere(['like', 'protivopokazaniya', $this->protivopokazaniya])
            ->andFilterWhere(['like', 'beremennost', $this->beremennost])
            ->andFilterWhere(['like', 'pobochnye', $this->pobochnye])
            ->andFilterWhere(['like', 'content', $this->content]);

        return $dataProvider;
    }
}

<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PertandinganHasil;

/**
 * PertandinganHasilSearch represents the model behind the search form of `app\models\PertandinganHasil`.
 */
class PertandinganHasilSearch extends PertandinganHasil
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'jadwal', 'games', 'home_point', 'home_lead', 'home_servewin', 'home_servelost', 'home_cons', 'home_overcome', 'opp_point', 'opp_lead', 'opp_servewin', 'opp_servelost', 'opp_cons', 'opp_overcome', 'game_duration'], 'integer'],
            [['last_update'], 'safe'],
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
        $query = PertandinganHasil::find();

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
            'jadwal' => $this->jadwal,
            'games' => $this->games,
            'home_point' => $this->home_point,
            'home_lead' => $this->home_lead,
            'home_servewin' => $this->home_servewin,
            'home_servelost' => $this->home_servelost,
            'home_cons' => $this->home_cons,
            'home_overcome' => $this->home_overcome,
            'opp_point' => $this->opp_point,
            'opp_lead' => $this->opp_lead,
            'opp_servewin' => $this->opp_servewin,
            'opp_servelost' => $this->opp_servelost,
            'opp_cons' => $this->opp_cons,
            'opp_overcome' => $this->opp_overcome,
            'game_duration' => $this->game_duration,
            'last_update' => $this->last_update,
        ]);

        return $dataProvider;
    }
}

<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PertandinganJadwal;

/**
 * PertandinganJadwalSearch represents the model behind the search form of `app\models\PertandinganJadwal`.
 */
class PertandinganJadwalSearch extends PertandinganJadwal
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nomer', 'kelas', 'gender', 'venue', 'wasit', 'tahap', 'home', 'home2', 'home_score', 'opponent', 'opponent2', 'opponent_score', 'hasil'], 'integer'],
            [['date', 'time'], 'safe'],
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
        $query = PertandinganJadwal::find();

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
            'nomer' => $this->nomer,
            'kelas' => $this->kelas,
            'gender' => $this->gender,
            'venue' => $this->venue,
            'wasit' => $this->wasit,
            'tahap' => $this->tahap,
            'home' => $this->home,
            'home2' => $this->home2,
            'home_score' => $this->home_score,
            'opponent' => $this->opponent,
            'opponent2' => $this->opponent2,
            'opponent_score' => $this->opponent_score,
            'date' => $this->date,
            'time' => $this->time,
            'hasil' => $this->hasil,
        ]);

        return $dataProvider;
    }
}

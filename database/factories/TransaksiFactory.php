<?php

namespace Database\Factories;

use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransaksiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaksi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tanggal' => $this->faker->date('Y-m-d'),
            'keterangan' => $this->faker->text(50),
            'jumlah' => $this->faker->randomNumber,
            'saldo' => $this->faker->randomNumber
        ];
    }
}

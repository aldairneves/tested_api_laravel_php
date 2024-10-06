<?php

namespace Database\Seeders;

use App\Models\Arquivos;
use App\Models\Chaves;
use App\Models\Post;
use App\Models\Senhas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InserirDadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::transaction(function () {

            $arquivos = [
                ['title_arquivo' => 'CPF', 'entidade' => 'Arquivo Pessoal', 'descricao' => 'Meu CPF', 'path_anexo' => 'arquivos\teste\fonte'],
                ['title_arquivo' => 'CPF', 'entidade' => 'Arquivo Pessoal', 'descricao' => 'Meu CPF', 'path_anexo' => 'arquivos\teste\fonte'],
                ['title_arquivo' => 'CPF', 'entidade' => 'Arquivo Pessoal', 'descricao' => 'Meu CPF', 'path_anexo' => 'arquivos\teste\fonte'],
                ['title_arquivo' => 'CPF', 'entidade' => 'Arquivo Pessoal', 'descricao' => 'Meu CPF', 'path_anexo' => 'arquivos\teste\fonte'],
                ['title_arquivo' => 'CPF', 'entidade' => 'Arquivo Pessoal', 'descricao' => 'Meu CPF', 'path_anexo' => 'arquivos\teste\fonte'],
                ['title_arquivo' => 'CPF', 'entidade' => 'Arquivo Pessoal', 'descricao' => 'Meu CPF', 'path_anexo' => 'arquivos\teste\fonte'],
                ['title_arquivo' => 'CPF', 'entidade' => 'Arquivo Pessoal', 'descricao' => 'Meu CPF', 'path_anexo' => 'arquivos\teste\fonte'],
                ['title_arquivo' => 'CPF', 'entidade' => 'Arquivo Pessoal', 'descricao' => 'Meu CPF', 'path_anexo' => 'arquivos\teste\fonte'],
                ['title_arquivo' => 'CPF', 'entidade' => 'Arquivo Pessoal', 'descricao' => 'Meu CPF', 'path_anexo' => 'arquivos\teste\fonte'],
                ['title_arquivo' => 'CPF', 'entidade' => 'Arquivo Pessoal', 'descricao' => 'Meu CPF', 'path_anexo' => 'arquivos\teste\fonte'],
                ['title_arquivo' => 'CPF', 'entidade' => 'Arquivo Pessoal', 'descricao' => 'Meu CPF', 'path_anexo' => 'arquivos\teste\fonte'],
            ];

            foreach ($arquivos as $arquivo) {
                Arquivos::create($arquivo);
            }

            $Chaves = [
                [
                    'plataforma' => 'Rubidio',
                    'email' => 'teste@email.com',

                    'codigo1' => '123456789',
                    'codigo1_used' => '1',
                    'reason1_use' => 'Usado para redefinir senha',
                    'date_used_1' => '2024-05-10',

                    'codigo2' => '123456789',
                    'codigo2_used' => '0',
                    'reason2_use' => '',
                    'date_used_2' => null,

                    'codigo3' => '123456789',
                    'codigo3_used' => '0',
                    'reason3_use' => '',
                    'date_used_3' => null,

                    'codigo4' => '123456789',
                    'codigo4_used' => '0',
                    'reason4_use' => '',
                    'date_used_4' => null,

                    'codigo5' => '123456789',
                    'codigo5_used' => '0',
                    'reason5_use' => '',
                    'date_used_5' => null,

                    'codigo6' => '123456789',
                    'codigo6_used' => '0',
                    'reason6_use' => '',
                    'date_used_6' => null,

                    'codigo7' => '123456789',
                    'codigo7_used' => '0',
                    'reason7_use' => '',
                    'date_used_7' => null,

                    'codigo8' => '123456789',
                    'codigo8_used' => '0',
                    'reason8_use' => '',
                    'date_used_8' => null,

                    'codigo9' => '123456789',
                    'codigo9_used' => '0',
                    'reason9_use' => '',
                    'date_used_9' => null,

                    'codigo10' => '123456789',
                    'codigo10_used' => '0',
                    'reason10_use' => '',
                    'date_used_10' => null,

                    'codigo11' => '123456789',
                    'codigo11_used' => '0',
                    'reason11_use' => '',
                    'date_used_11' => null,

                    'codigo12' => '123456789',
                    'codigo12_used' => '0',
                    'reason12_use' => '',
                    'date_used_12' => null,

                    'codigo13' => '123456789',
                    'codigo13_used' => '0',
                    'reason13_use' => '',
                    'date_used_13' => null,

                    'codigo14' => '123456789',
                    'codigo14_used' => '0',
                    'reason14_use' => '',
                    'date_used_14' => null,

                    'path_anexo' => 'arquivos\teste\fonte',
                    'valido' => '0',
                    'date_generation' => '2024-05-05',
                    'date_closing' => '2024-05-10'
                ],
                [
                    'plataforma' => 'Facebook',
                    'email' => 'teste@email.com',

                    'codigo1' => '123456789',
                    'codigo1_used' => '1',
                    'reason1_use' => 'Usado para redefinir senha',
                    'date_used_1' => '2024-05-10',

                    'codigo2' => '123456789',
                    'codigo2_used' => '0',
                    'reason2_use' => '',
                    'date_used_2' => null,

                    'codigo3' => '123456789',
                    'codigo3_used' => '0',
                    'reason3_use' => '',
                    'date_used_3' => null,

                    'codigo4' => '123456789',
                    'codigo4_used' => '0',
                    'reason4_use' => '',
                    'date_used_4' => null,

                    'codigo5' => '123456789',
                    'codigo5_used' => '0',
                    'reason5_use' => '',
                    'date_used_5' => null,

                    'codigo6' => '123456789',
                    'codigo6_used' => '0',
                    'reason6_use' => '',
                    'date_used_6' => null,

                    'codigo7' => '123456789',
                    'codigo7_used' => '0',
                    'reason7_use' => '',
                    'date_used_7' => null,

                    'codigo8' => '123456789',
                    'codigo8_used' => '0',
                    'reason8_use' => '',
                    'date_used_8' => null,

                    'codigo9' => '123456789',
                    'codigo9_used' => '0',
                    'reason9_use' => '',
                    'date_used_9' => null,

                    'codigo10' => '123456789',
                    'codigo10_used' => '0',
                    'reason10_use' => '',
                    'date_used_10' => null,

                    'codigo11' => '123456789',
                    'codigo11_used' => '0',
                    'reason11_use' => '',
                    'date_used_11' => null,

                    'codigo12' => '123456789',
                    'codigo12_used' => '0',
                    'reason12_use' => '',
                    'date_used_12' => null,

                    'codigo13' => '123456789',
                    'codigo13_used' => '0',
                    'reason13_use' => '',
                    'date_used_13' => null,

                    'codigo14' => '123456789',
                    'codigo14_used' => '0',
                    'reason14_use' => '',
                    'date_used_14' => null,

                    'path_anexo' => 'arquivos\teste\fonte',
                    'valido' => '0',
                    'date_generation' => '2024-05-05',
                    'date_closing' => '2024-05-10'
                ],
                [
                    'plataforma' => 'Instagram',
                    'email' => 'teste@email.com',

                    'codigo1' => '123456789',
                    'codigo1_used' => '1',
                    'reason1_use' => 'Usado para redefinir senha',
                    'date_used_1' => '2024-05-10',

                    'codigo2' => '123456789',
                    'codigo2_used' => '0',
                    'reason2_use' => '',
                    'date_used_2' => null,

                    'codigo3' => '123456789',
                    'codigo3_used' => '0',
                    'reason3_use' => '',
                    'date_used_3' => null,

                    'codigo4' => '123456789',
                    'codigo4_used' => '0',
                    'reason4_use' => '',
                    'date_used_4' => null,

                    'codigo5' => '123456789',
                    'codigo5_used' => '0',
                    'reason5_use' => '',
                    'date_used_5' => null,

                    'codigo6' => '123456789',
                    'codigo6_used' => '0',
                    'reason6_use' => '',
                    'date_used_6' => null,

                    'codigo7' => '123456789',
                    'codigo7_used' => '0',
                    'reason7_use' => '',
                    'date_used_7' => null,

                    'codigo8' => '123456789',
                    'codigo8_used' => '0',
                    'reason8_use' => '',
                    'date_used_8' => null,

                    'codigo9' => '123456789',
                    'codigo9_used' => '0',
                    'reason9_use' => '',
                    'date_used_9' => null,

                    'codigo10' => '123456789',
                    'codigo10_used' => '0',
                    'reason10_use' => '',
                    'date_used_10' => null,

                    'codigo11' => '123456789',
                    'codigo11_used' => '0',
                    'reason11_use' => '',
                    'date_used_11' => null,

                    'codigo12' => '123456789',
                    'codigo12_used' => '0',
                    'reason12_use' => '',
                    'date_used_12' => null,

                    'codigo13' => '123456789',
                    'codigo13_used' => '0',
                    'reason13_use' => '',
                    'date_used_13' => null,

                    'codigo14' => '123456789',
                    'codigo14_used' => '0',
                    'reason14_use' => '',
                    'date_used_14' => null,

                    'path_anexo' => 'arquivos\teste\fonte',
                    'valido' => '0',
                    'date_generation' => '2024-05-05',
                    'date_closing' => '2024-05-10'
                ],
                [
                    'plataforma' => 'GitHub',
                    'email' => 'teste@email.com',

                    'codigo1' => '123456789',
                    'codigo1_used' => '1',
                    'reason1_use' => 'Usado para redefinir senha',
                    'date_used_1' => '2024-05-10',

                    'codigo2' => '123456789',
                    'codigo2_used' => '0',
                    'reason2_use' => '',
                    'date_used_2' => null,

                    'codigo3' => '123456789',
                    'codigo3_used' => '0',
                    'reason3_use' => '',
                    'date_used_3' => null,

                    'codigo4' => '123456789',
                    'codigo4_used' => '0',
                    'reason4_use' => '',
                    'date_used_4' => null,

                    'codigo5' => '123456789',
                    'codigo5_used' => '0',
                    'reason5_use' => '',
                    'date_used_5' => null,

                    'codigo6' => '123456789',
                    'codigo6_used' => '0',
                    'reason6_use' => '',
                    'date_used_6' => null,

                    'codigo7' => '123456789',
                    'codigo7_used' => '0',
                    'reason7_use' => '',
                    'date_used_7' => null,

                    'codigo8' => '123456789',
                    'codigo8_used' => '0',
                    'reason8_use' => '',
                    'date_used_8' => null,

                    'codigo9' => '123456789',
                    'codigo9_used' => '0',
                    'reason9_use' => '',
                    'date_used_9' => null,

                    'codigo10' => '123456789',
                    'codigo10_used' => '0',
                    'reason10_use' => '',
                    'date_used_10' => null,

                    'codigo11' => '123456789',
                    'codigo11_used' => '0',
                    'reason11_use' => '',
                    'date_used_11' => null,

                    'codigo12' => '123456789',
                    'codigo12_used' => '0',
                    'reason12_use' => '',
                    'date_used_12' => null,

                    'codigo13' => '123456789',
                    'codigo13_used' => '0',
                    'reason13_use' => '',
                    'date_used_13' => null,

                    'codigo14' => '123456789',
                    'codigo14_used' => '0',
                    'reason14_use' => '',
                    'date_used_14' => null,

                    'path_anexo' => 'arquivos\teste\fonte',
                    'valido' => '0',
                    'date_generation' => '2024-05-05',
                    'date_closing' => '2024-05-10'
                ],
                [
                    'plataforma' => 'Discord',
                    'email' => 'teste@email.com',

                    'codigo1' => '123456789',
                    'codigo1_used' => '1',
                    'reason1_use' => 'Usado para redefinir senha',
                    'date_used_1' => '2024-05-10',

                    'codigo2' => '123456789',
                    'codigo2_used' => '0',
                    'reason2_use' => '',
                    'date_used_2' => null,

                    'codigo3' => '123456789',
                    'codigo3_used' => '0',
                    'reason3_use' => '',
                    'date_used_3' => null,

                    'codigo4' => '123456789',
                    'codigo4_used' => '0',
                    'reason4_use' => '',
                    'date_used_4' => null,

                    'codigo5' => '123456789',
                    'codigo5_used' => '0',
                    'reason5_use' => '',
                    'date_used_5' => null,

                    'codigo6' => '123456789',
                    'codigo6_used' => '0',
                    'reason6_use' => '',
                    'date_used_6' => null,

                    'codigo7' => '123456789',
                    'codigo7_used' => '0',
                    'reason7_use' => '',
                    'date_used_7' => null,

                    'codigo8' => '123456789',
                    'codigo8_used' => '0',
                    'reason8_use' => '',
                    'date_used_8' => null,

                    'codigo9' => '123456789',
                    'codigo9_used' => '0',
                    'reason9_use' => '',
                    'date_used_9' => null,

                    'codigo10' => '123456789',
                    'codigo10_used' => '0',
                    'reason10_use' => '',
                    'date_used_10' => null,

                    'codigo11' => '123456789',
                    'codigo11_used' => '0',
                    'reason11_use' => '',
                    'date_used_11' => null,

                    'codigo12' => '123456789',
                    'codigo12_used' => '0',
                    'reason12_use' => '',
                    'date_used_12' => null,

                    'codigo13' => '123456789',
                    'codigo13_used' => '0',
                    'reason13_use' => '',
                    'date_used_13' => null,

                    'codigo14' => '123456789',
                    'codigo14_used' => '0',
                    'reason14_use' => '',
                    'date_used_14' => null,

                    'path_anexo' => 'arquivos\teste\fonte',
                    'valido' => '0',
                    'date_generation' => '2024-05-05',
                    'date_closing' => '2024-05-10'
                ],
                [
                    'plataforma' => 'Google',
                    'email' => 'teste@email.com',

                    'codigo1' => '123456789',
                    'codigo1_used' => '1',
                    'reason1_use' => 'Usado para redefinir senha',
                    'date_used_1' => '2024-05-10',

                    'codigo2' => '123456789',
                    'codigo2_used' => '0',
                    'reason2_use' => '',
                    'date_used_2' => null,

                    'codigo3' => '123456789',
                    'codigo3_used' => '0',
                    'reason3_use' => '',
                    'date_used_3' => null,

                    'codigo4' => '123456789',
                    'codigo4_used' => '0',
                    'reason4_use' => '',
                    'date_used_4' => null,

                    'codigo5' => '123456789',
                    'codigo5_used' => '0',
                    'reason5_use' => '',
                    'date_used_5' => null,

                    'codigo6' => '123456789',
                    'codigo6_used' => '0',
                    'reason6_use' => '',
                    'date_used_6' => null,

                    'codigo7' => '123456789',
                    'codigo7_used' => '0',
                    'reason7_use' => '',
                    'date_used_7' => null,

                    'codigo8' => '123456789',
                    'codigo8_used' => '0',
                    'reason8_use' => '',
                    'date_used_8' => null,

                    'codigo9' => '123456789',
                    'codigo9_used' => '0',
                    'reason9_use' => '',
                    'date_used_9' => null,

                    'codigo10' => '123456789',
                    'codigo10_used' => '0',
                    'reason10_use' => '',
                    'date_used_10' => null,

                    'codigo11' => '123456789',
                    'codigo11_used' => '0',
                    'reason11_use' => '',
                    'date_used_11' => null,

                    'codigo12' => '123456789',
                    'codigo12_used' => '0',
                    'reason12_use' => '',
                    'date_used_12' => null,

                    'codigo13' => '123456789',
                    'codigo13_used' => '0',
                    'reason13_use' => '',
                    'date_used_13' => null,

                    'codigo14' => '123456789',
                    'codigo14_used' => '0',
                    'reason14_use' => '',
                    'date_used_14' => null,

                    'path_anexo' => 'arquivos\teste\fonte',
                    'valido' => '0',
                    'date_generation' => '2024-05-05',
                    'date_closing' => '2024-05-10'
                ],
                [
                    'plataforma' => 'Microsoft',
                    'email' => 'teste@email.com',

                    'codigo1' => '123456789',
                    'codigo1_used' => '1',
                    'reason1_use' => 'Usado para redefinir senha',
                    'date_used_1' => '2024-05-10',

                    'codigo2' => '123456789',
                    'codigo2_used' => '0',
                    'reason2_use' => '',
                    'date_used_2' => null,

                    'codigo3' => '123456789',
                    'codigo3_used' => '0',
                    'reason3_use' => '',
                    'date_used_3' => null,

                    'codigo4' => '123456789',
                    'codigo4_used' => '0',
                    'reason4_use' => '',
                    'date_used_4' => null,

                    'codigo5' => '123456789',
                    'codigo5_used' => '0',
                    'reason5_use' => '',
                    'date_used_5' => null,

                    'codigo6' => '123456789',
                    'codigo6_used' => '0',
                    'reason6_use' => '',
                    'date_used_6' => null,

                    'codigo7' => '123456789',
                    'codigo7_used' => '0',
                    'reason7_use' => '',
                    'date_used_7' => null,

                    'codigo8' => '123456789',
                    'codigo8_used' => '0',
                    'reason8_use' => '',
                    'date_used_8' => null,

                    'codigo9' => '123456789',
                    'codigo9_used' => '0',
                    'reason9_use' => '',
                    'date_used_9' => null,

                    'codigo10' => '123456789',
                    'codigo10_used' => '0',
                    'reason10_use' => '',
                    'date_used_10' => null,

                    'codigo11' => '123456789',
                    'codigo11_used' => '0',
                    'reason11_use' => '',
                    'date_used_11' => null,

                    'codigo12' => '123456789',
                    'codigo12_used' => '0',
                    'reason12_use' => '',
                    'date_used_12' => null,

                    'codigo13' => '123456789',
                    'codigo13_used' => '0',
                    'reason13_use' => '',
                    'date_used_13' => null,

                    'codigo14' => '123456789',
                    'codigo14_used' => '0',
                    'reason14_use' => '',
                    'date_used_14' => null,

                    'path_anexo' => 'arquivos\teste\fonte',
                    'valido' => '0',
                    'date_generation' => '2024-05-05',
                    'date_closing' => '2024-05-10'
                ],
                [
                    'plataforma' => 'Google Conta 2',
                    'email' => 'teste@email.com',

                    'codigo1' => '123456789',
                    'codigo1_used' => '1',
                    'reason1_use' => 'Usado para redefinir senha',
                    'date_used_1' => '2024-05-10',

                    'codigo2' => '123456789',
                    'codigo2_used' => '0',
                    'reason2_use' => '',
                    'date_used_2' => null,

                    'codigo3' => '123456789',
                    'codigo3_used' => '0',
                    'reason3_use' => '',
                    'date_used_3' => null,

                    'codigo4' => '123456789',
                    'codigo4_used' => '0',
                    'reason4_use' => '',
                    'date_used_4' => null,

                    'codigo5' => '123456789',
                    'codigo5_used' => '0',
                    'reason5_use' => '',
                    'date_used_5' => null,

                    'codigo6' => '123456789',
                    'codigo6_used' => '0',
                    'reason6_use' => '',
                    'date_used_6' => null,

                    'codigo7' => '123456789',
                    'codigo7_used' => '0',
                    'reason7_use' => '',
                    'date_used_7' => null,

                    'codigo8' => '123456789',
                    'codigo8_used' => '0',
                    'reason8_use' => '',
                    'date_used_8' => null,

                    'codigo9' => '123456789',
                    'codigo9_used' => '0',
                    'reason9_use' => '',
                    'date_used_9' => null,

                    'codigo10' => '123456789',
                    'codigo10_used' => '0',
                    'reason10_use' => '',
                    'date_used_10' => null,

                    'codigo11' => '123456789',
                    'codigo11_used' => '0',
                    'reason11_use' => '',
                    'date_used_11' => null,

                    'codigo12' => '123456789',
                    'codigo12_used' => '0',
                    'reason12_use' => '',
                    'date_used_12' => null,

                    'codigo13' => '123456789',
                    'codigo13_used' => '0',
                    'reason13_use' => '',
                    'date_used_13' => null,

                    'codigo14' => '123456789',
                    'codigo14_used' => '0',
                    'reason14_use' => '',
                    'date_used_14' => null,

                    'path_anexo' => 'arquivos\teste\fonte',
                    'valido' => '0',
                    'date_generation' => '2024-05-05',
                    'date_closing' => '2024-05-10'
                ],
                [
                    'plataforma' => 'Google Conta 3',
                    'email' => 'teste@email.com',

                    'codigo1' => '123456789',
                    'codigo1_used' => '1',
                    'reason1_use' => 'Usado para redefinir senha',
                    'date_used_1' => '2024-05-10',

                    'codigo2' => '123456789',
                    'codigo2_used' => '0',
                    'reason2_use' => '',
                    'date_used_2' => null,

                    'codigo3' => '123456789',
                    'codigo3_used' => '0',
                    'reason3_use' => '',
                    'date_used_3' => null,

                    'codigo4' => '123456789',
                    'codigo4_used' => '0',
                    'reason4_use' => '',
                    'date_used_4' => null,

                    'codigo5' => '123456789',
                    'codigo5_used' => '0',
                    'reason5_use' => '',
                    'date_used_5' => null,

                    'codigo6' => '123456789',
                    'codigo6_used' => '0',
                    'reason6_use' => '',
                    'date_used_6' => null,

                    'codigo7' => '123456789',
                    'codigo7_used' => '0',
                    'reason7_use' => '',
                    'date_used_7' => null,

                    'codigo8' => '123456789',
                    'codigo8_used' => '0',
                    'reason8_use' => '',
                    'date_used_8' => null,

                    'codigo9' => '123456789',
                    'codigo9_used' => '0',
                    'reason9_use' => '',
                    'date_used_9' => null,

                    'codigo10' => '123456789',
                    'codigo10_used' => '0',
                    'reason10_use' => '',
                    'date_used_10' => null,

                    'codigo11' => '123456789',
                    'codigo11_used' => '0',
                    'reason11_use' => '',
                    'date_used_11' => null,

                    'codigo12' => '123456789',
                    'codigo12_used' => '0',
                    'reason12_use' => '',
                    'date_used_12' => null,

                    'codigo13' => '123456789',
                    'codigo13_used' => '0',
                    'reason13_use' => '',
                    'date_used_13' => null,

                    'codigo14' => '123456789',
                    'codigo14_used' => '0',
                    'reason14_use' => '',
                    'date_used_14' => null,

                    'path_anexo' => 'arquivos\teste\fonte',
                    'valido' => '0',
                    'date_generation' => '2024-05-05',
                    'date_closing' => '2024-05-10'
                ],
                [
                    'plataforma' => 'Blog',
                    'email' => 'teste@email.com',

                    'codigo1' => '123456789',
                    'codigo1_used' => '1',
                    'reason1_use' => 'Usado para redefinir senha',
                    'date_used_1' => '2024-05-10',

                    'codigo2' => '123456789',
                    'codigo2_used' => '0',
                    'reason2_use' => '',
                    'date_used_2' => null,

                    'codigo3' => '123456789',
                    'codigo3_used' => '0',
                    'reason3_use' => '',
                    'date_used_3' => null,

                    'codigo4' => '123456789',
                    'codigo4_used' => '0',
                    'reason4_use' => '',
                    'date_used_4' => null,

                    'codigo5' => '123456789',
                    'codigo5_used' => '0',
                    'reason5_use' => '',
                    'date_used_5' => null,

                    'codigo6' => '123456789',
                    'codigo6_used' => '0',
                    'reason6_use' => '',
                    'date_used_6' => null,

                    'codigo7' => '123456789',
                    'codigo7_used' => '0',
                    'reason7_use' => '',
                    'date_used_7' => null,

                    'codigo8' => '123456789',
                    'codigo8_used' => '0',
                    'reason8_use' => '',
                    'date_used_8' => null,

                    'codigo9' => '123456789',
                    'codigo9_used' => '0',
                    'reason9_use' => '',
                    'date_used_9' => null,

                    'codigo10' => '123456789',
                    'codigo10_used' => '0',
                    'reason10_use' => '',
                    'date_used_10' => null,

                    'codigo11' => '123456789',
                    'codigo11_used' => '0',
                    'reason11_use' => '',
                    'date_used_11' => null,

                    'codigo12' => '123456789',
                    'codigo12_used' => '0',
                    'reason12_use' => '',
                    'date_used_12' => null,

                    'codigo13' => '123456789',
                    'codigo13_used' => '0',
                    'reason13_use' => '',
                    'date_used_13' => null,

                    'codigo14' => '123456789',
                    'codigo14_used' => '0',
                    'reason14_use' => '',
                    'date_used_14' => null,

                    'path_anexo' => 'arquivos\teste\fonte',
                    'valido' => '0',
                    'date_generation' => '2024-05-05',
                    'date_closing' => '2024-05-10'
                ],
            ];

            foreach ($Chaves as $Chave) {
                Chaves::create($Chave);
            }

            $senhas = [
                ['plataforma' => 'Instagram', 'email' => 'teste@email.com', 'senha' => '123456789', 'email_recovery' => 'teste@emailrecovery.com', 'date_generation' => '2024-05-10', 'senha_valido' => '1', 'senha_alterada' => '1', 'motivo' => 'Trocada', 'data_alteracao' => '2024-05-10'],
                ['plataforma' => 'Facebook', 'email' => 'teste@email.com', 'senha' => '123456789', 'email_recovery' => 'teste@emailrecovery.com', 'date_generation' => '2024-05-10', 'senha_valido' => '0', 'senha_alterada' => '0', 'motivo' => '', 'data_alteracao' => null],
                ['plataforma' => 'Google', 'email' => 'teste@email.com', 'senha' => '123456789', 'email_recovery' => 'teste@emailrecovery.com', 'date_generation' => '2024-05-10', 'senha_valido' => '0', 'senha_alterada' => '0', 'motivo' => '', 'data_alteracao' => null],
                ['plataforma' => 'Google conta 2', 'email' => 'teste@email.com', 'senha' => '123456789', 'email_recovery' => 'teste@emailrecovery.com', 'date_generation' => '2024-05-10', 'senha_valido' => '0', 'senha_alterada' => '0', 'motivo' => '', 'data_alteracao' => null],
                ['plataforma' => 'Google conta 3', 'email' => 'teste@email.com', 'senha' => '123456789', 'email_recovery' => 'teste@emailrecovery.com', 'date_generation' => '2024-05-10', 'senha_valido' => '0', 'senha_alterada' => '0', 'motivo' => '', 'data_alteracao' => null],
                ['plataforma' => 'Banco 1', 'email' => 'teste@email.com', 'senha' => '123456789', 'email_recovery' => 'teste@emailrecovery.com', 'date_generation' => '2024-05-10', 'senha_valido' => '0', 'senha_alterada' => '0', 'motivo' => '', 'data_alteracao' => null],
                ['plataforma' => 'Banco 2', 'email' => 'teste@email.com', 'senha' => '123456789', 'email_recovery' => 'teste@emailrecovery.com', 'date_generation' => '2024-05-10', 'senha_valido' => '0', 'senha_alterada' => '0', 'motivo' => '', 'data_alteracao' => null],
                ['plataforma' => 'Banco 3', 'email' => 'teste@email.com', 'senha' => '123456789', 'email_recovery' => 'teste@emailrecovery.com', 'date_generation' => '2024-05-10', 'senha_valido' => '0', 'senha_alterada' => '0', 'motivo' => '', 'data_alteracao' => null],
                ['plataforma' => 'GitHub', 'email' => 'teste@email.com', 'senha' => '123456789', 'email_recovery' => 'teste@emailrecovery.com', 'date_generation' => '2024-05-10', 'senha_valido' => '0', 'senha_alterada' => '0', 'motivo' => '', 'data_alteracao' => null],
                ['plataforma' => 'Rubidio', 'email' => 'teste@email.com', 'senha' => '123456789', 'email_recovery' => 'teste@emailrecovery.com', 'date_generation' => '2024-05-10', 'senha_valido' => '0', 'senha_alterada' => '0', 'motivo' => '', 'data_alteracao' => null],
            ];
            foreach ($senhas as $senha) {
                Senhas::create($senha);
            }

            $posts = [
                ['title_anotacao' => 'Anotação', 'conteudo' => '123456789', 'status' => 'Pendente', 'path_anexo' => 'arquivos\teste\fonte', 'urgencia' => 'Sim'],
                ['title_anotacao' => 'Lembrete', 'conteudo' => '123456789', 'status' => 'Pendente', 'path_anexo' => 'arquivos\teste\fonte', 'urgencia' => 'Não'],
                ['title_anotacao' => 'Aviso', 'conteudo' => '123456789', 'status' => 'Pendente', 'path_anexo' => 'arquivos\teste\fonte', 'urgencia' => 'Sim'],
                ['title_anotacao' => 'Anotação', 'conteudo' => '123456789', 'status' => 'Pendente', 'path_anexo' => 'arquivos\teste\fonte', 'urgencia' => 'Sim'],
                ['title_anotacao' => 'Lembrete', 'conteudo' => '123456789', 'status' => 'Pendente', 'path_anexo' => 'arquivos\teste\fonte', 'urgencia' => 'Sim'],
                ['title_anotacao' => 'Aviso', 'conteudo' => '123456789', 'status' => 'Pendente', 'path_anexo' => 'arquivos\teste\fonte', 'urgencia' => 'Sim'],
                ['title_anotacao' => 'Anotação', 'conteudo' => '123456789', 'status' => 'Pendente', 'path_anexo' => 'arquivos\teste\fonte', 'urgencia' => 'Sim'],
                ['title_anotacao' => 'Lembrete', 'conteudo' => '123456789', 'status' => 'Pendente', 'path_anexo' => 'arquivos\teste\fonte', 'urgencia' => 'Sim'],
                ['title_anotacao' => 'Aviso', 'conteudo' => '123456789', 'status' => 'Pendente', 'path_anexo' => 'arquivos\teste\fonte', 'urgencia' => 'Não'],
                ['title_anotacao' => 'Anotação', 'conteudo' => '123456789', 'status' => 'Pendente', 'path_anexo' => 'arquivos\teste\fonte', 'urgencia' => 'Não'],
                ['title_anotacao' => 'Lembrete', 'conteudo' => '123456789', 'status' => 'Pendente', 'path_anexo' => 'arquivos\teste\fonte', 'urgencia' => 'Não'],
                ['title_anotacao' => 'Aviso', 'conteudo' => '123456789', 'status' => 'Pendente', 'path_anexo' => 'arquivos\teste\fonte', 'urgencia' => 'Não'],
                ['title_anotacao' => 'Anotação', 'conteudo' => '123456789', 'status' => 'Pendente', 'path_anexo' => 'arquivos\teste\fonte', 'urgencia' => 'Não'],
                ['title_anotacao' => 'Lembrete', 'conteudo' => '123456789', 'status' => 'Pendente', 'path_anexo' => 'arquivos\teste\fonte', 'urgencia' => 'Não'],
                ['title_anotacao' => 'Aviso', 'conteudo' => '123456789', 'status' => 'Pendente', 'path_anexo' => 'arquivos\teste\fonte', 'urgencia' => 'Não'],
            ];
            foreach ($posts as $post) {
                Post::create($post);
            }
        });
    }
}

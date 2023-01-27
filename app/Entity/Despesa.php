<?php

namespace App\Entity;

use App\Db\Database;
use \PDO;

class Despesa {

    /**
     * Identificador único da despesa
     * @var integer
     */
    public $id;

    /**
     * Nome do Cobrador
     * @var string
     */
    public $cobradorNome;

    /**
     * Descrição da Despesa
     * @var string
     */
    public $descricao;

    /**
     * Define se a despesa já foi paga ou está pendente
     * @var string(pago/pendente)
     */
    public $status;

    /**
     * Data de publicação de vencimento
     * @var string
     */
    public $vencData;

    /**
     * Data em que foi pago
     * @var string
     */
    public $pagData;

    /**
     * Valor a ser pago
     * @var integer
     */
    public $valor;

    /**
     * Método responsável por cadastrar uma nova despesa no banco de dados
     * @return boolean
     */
    public function cadastrar(){

        //INSERIR A DESPESA NO BANCO
        $obDatabase = new Database('despesas'); //Pode mudar o nome da tabela
        $this->id = $obDatabase->insert([ //Chave-Valor -> 'Campo' | Conteúdo
                                        'cobradorNome' => $this->cobradorNome,
                                        'descricao' => $this->descricao,
                                        'status' => $this->status,
                                        'vencData' => $this->vencData,
                                        'pagData' => $this->pagData,
                                        'valor' => $this->valor
                                        ]);

        //RETORNAR SUCESSO
        return true;
    }

    /**
     * Método responsável por atualizar a despesa no banco
     * @return boolean
     */
    public function atualizar(){
        return (new Database('despesas'))->update('id = '.$this->id,[
                                        'cobradorNome' => $this->cobradorNome,
                                        'descricao' => $this->descricao,
                                        'status' => $this->status,
                                        'vencData' => $this->vencData,
                                        'pagData' => $this->pagData,
                                        'valor' => $this->valor
                                        ]);
    }

    /**
     * Método responsável por excluir a despesa do banco
     * @return boolean
     */
    public function excluir(){
        return (new Database('despesas'))->delete('id = '.$this->id);
    }

    /**
     * Método responsável por obter as despesas do banco de dados
     * @param string $where
     * @param string $order
     * @param string $limit
     * @return array
     */
    public static function getDespesas($where = null, $order = null, $limit = null){
        return (new Database('despesas'))->select($where,$order,$limit)
                                    ->fetchAll(PDO::FETCH_CLASS,self::class);
    }

    /**
     * Método responsável por buscar uma despesa com base em seu ID
     * @param integer $id
     * @return Despesa
     */
    public static function getDespesa($id){
        return (new Database('despesas'))->select('id = '.$id)
                                        ->fetchObject(self::class);
    }
}
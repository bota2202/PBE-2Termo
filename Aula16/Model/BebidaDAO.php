<?php
require_once 'Bebida.php';

class BebidaDAO {
    private $bebidasArray = [];
    private $arquivoJson;
    
    public function __construct(){
        $this->arquivoJson = __DIR__ . '/bebidas.json';
        if(file_exists($this->arquivoJson)){
            $conteudoArquivo = file_get_contents($this->arquivoJson);

            $dadosArquivoEmArray = json_decode($conteudoArquivo, true);

            if ($dadosArquivoEmArray){
                foreach ($dadosArquivoEmArray as $nome => $info){
                    $this->bebidasArray[$nome] = new Bebida(
                        $info['nome'],
                        $info['categoria'],
                        $info['volume'],
                        $info['valor'],
                        $info['qtde']
                    );
                }
            }
        }
    }
    
    private function salvarArquivo(){
        $dadosParaSalvar = [];

        foreach ($this->bebidasArray as $nome => $bebida){
            $dadosParaSalvar[$nome] = [
                'nome' => $bebida->getNome(),
                'categoria' => $bebida->getCategoria(),
                'volume' => $bebida->getVolume(),
                'valor' => $bebida->getValor(),
                'qtde' => $bebida->getQtde()
            ];
        }
        file_put_contents($this->arquivoJson, json_encode($dadosParaSalvar, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }

    // CREATE
    public function criarBebida(Bebida $bebida){
        $this->bebidasArray[$bebida->getNome()] = $bebida;
        $this->salvarArquivo();
    }

    // READ
    public function lerBebidas(){
        return $this->bebidasArray;
    }
    
    // UPDATE - Atualiza TODOS os campos da bebida
    public function atualizarBebida($nomeOriginal, $novoNome, $novaCategoria, $novoVolume, $novoValor, $novaQtde){
        if(isset($this->bebidasArray[$nomeOriginal])){
            // Remove a bebida antiga se o nome foi alterado
            if($nomeOriginal !== $novoNome){
                unset($this->bebidasArray[$nomeOriginal]);
            }
            
            // Cria/atualiza a bebida com os novos dados
            $bebidaAtualizada = new Bebida($novoNome, $novaCategoria, $novoVolume, $novoValor, $novaQtde);
            $this->bebidasArray[$novoNome] = $bebidaAtualizada;
            
            $this->salvarArquivo();
            return true;
        }
        return false;
    }

    // DELETE
    public function excluirBebida($nome){
        if(isset($this->bebidasArray[$nome])){
            unset($this->bebidasArray[$nome]);
            $this->salvarArquivo();
            return true;
        }
        return false;
    }
}
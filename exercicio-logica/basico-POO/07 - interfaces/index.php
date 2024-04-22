<?php 
/*Uma interface segue o mesmo conceito de uma classse abstrata, onde serve como um modelo para outras classes implementar, obrigando que todas as classes que implementarem, tenham todos os métodos que a interface tenha. Possui comportamento muito semelhante com a classe abstract, as duas te obrigam  a implementar os seus métodos modelo. A diferença é que na interface você não consegue tratar nada no métodos, somente passar o parâmetro. Já no abstract você consegue tratat e fazer validações no próprio método.

Estrutura para criação de uma interface:
    interface Nome{

    }
    class Nome implements Nome{

    }

*/

interface Crud {
    public function create();
    public function read();
    public function update();
    public function delete();

}
    
class Noticias implements Crud 
{
    public function create(){
        // Cód. para criar notícia 
    }
    public function read(){
        // Cód. para ler notícia
    }
    public function update(){
        // Cód. para atualizar notícia
    }
    public function delete(){
        // Cód. para deletar notícia
    }
}

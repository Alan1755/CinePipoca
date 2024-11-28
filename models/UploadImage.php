<?php
// Conexão com o banco de dados
require_once '../models/ConexaoBanco.php';

class UploadImagem extends ConexaoBanco {

    // Método estático para upload
    public static function upload() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $apiKey = '0121063378e83b93993dd3f7fbe7d600'; // Sua API Key do imgbb
            $albumId = 'JnqFkz'; // Substitua 'SEU_ALBUM_ID' pelo ID do seu álbum no imgbb
            $image = $_FILES['image'];
            $nome = $_POST['nome'];

            // Verifica se a imagem foi enviada sem erros
            if ($image['error'] === UPLOAD_ERR_OK) {
                // Configuração da URL da API do imgbb e parâmetros da imagem
                $url = 'https://api.imgbb.com/1/upload';
                $data = [
                    'key' => $apiKey,
                    'image' => base64_encode(file_get_contents($image['tmp_name'])),
                    'album' => $albumId // Inclui o ID do álbum
                ];

                // Inicializa o cURL
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                // Executa a requisição para a API do imgbb
                $response = curl_exec($ch);
                curl_close($ch);

                // Decodifica a resposta JSON
                $result = json_decode($response, true);

                if ($result['success']) {
                    // Obtém a URL da imagem hospedada no imgbb
                    $imageUrl = $result['data']['url'];

                    // Conecta ao banco de dados para salvar a URL
                    $conBD = (new ConexaoBanco())->conBD;
                    $sql = $conBD->prepare("INSERT INTO imagens (nome, url) VALUES (:nome, :url)");
                    $sql->bindParam(':nome', $nome);
                    $sql->bindParam(':url', $imageUrl);

                    // Verifica se a inserção foi bem-sucedida
                    if ($sql->execute()) {
                        echo "Imagem enviada com sucesso! URL: <a href='$imageUrl'>$imageUrl</a>";
                    } else {
                        echo "Erro ao salvar a URL no banco de dados.";
                    }
                } else {
                    // Exibe mensagem de erro caso a API retorne falha
                    echo "Erro ao enviar a imagem: " . $result['error']['message'];
                }
            } else {
                echo "Erro no upload: " . $image['error'];
            }
        } else {
            echo "Método inválido.";
        }
        die();
    }
}

// Chama o método de upload diretamente
UploadImagem::upload();
?>
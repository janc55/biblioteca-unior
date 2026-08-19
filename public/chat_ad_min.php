
<?php $values = auth()->user()->permisos;  include "est.php";  //ADMIN?>



                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">INTELIGENCIA ARTIFICIAL</h3>
                    </div>
                    <div class="card-body">

                        <?php
                         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            $apiKey = 'TU_CLAVE_DE_API';

                            $prompt = $_POST['texto'];
         $url = 'https://api.openai.com/v1/engines/text-davinci-003/completions';

                              $headers = [
                                'Content-Type: application/json',
                                'Authorization: Bearer ' . getenv('OPENAI_API_KEY'),
                            ];
                             $data = [
                                'prompt' => $prompt,
                                'max_tokens' => 100,
                            ];

                              $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, $url);
                            curl_setopt($ch, CURLOPT_POST, true);
                            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

                              $response = curl_exec($ch);

                               if (curl_errno($ch)) {
                                echo 'Error: ' . curl_error($ch);
                            } else {
                                  $responseData = json_decode($response, true);
           if (isset($responseData['choices'][0]['text'])) {
                                       $completion = $responseData['choices'][0]['text'];

                                        echo '<div class="alert alert-success">' . $completion . '</div>';
                                } else {
                                    echo '<div class="alert alert-danger">Error: No se pudo obtener una respuesta válida de la API de OpenAI</div>';
                                }
                            }

                                 curl_close($ch);
                        }
                        ?>

                          <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Ingrese su texto" name="texto" required>
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>


            <?php include "bofer.php";?>

<html> 
      <head> 
           <style>
                  .s53s{
                        margin-left: 720px;
                        margin-top: 320px;
                        background-image: url(roxo.gif);
                        margin-right: 200px;
                        height: 200px;
                        width: 400px;
                        padding-left: 100px;
                        border-radius: 50px;
                        padding-top: 30px;
                        background-size: cover;
                        background-repeat: no-repeat;
                        box-shadow: 5px 10px 50px 20px purple;
                        opacity: 20px;
                  }

                  .ipt{
                       width: 300px;
                       height: 50px;
                       background-color: black;
                       color: white;
                       border-radius: 30px;
                      
                  }

                  .ipt:hover{
                    transition: 1.5s;
                  }

                  .mud{
                       color: white;
                       height: 50%;
                       font-weight: bold;
                       background-image: url(roxo.gif);
                       margin-right: -2px;
                       margin-left: -100px;
                      padding-left: 63px;
                      border-radius: 20px;
                      transition: 1.2s;
                      margin-top: -30px;
                      padding-top: 20px;
                      transition: 1.5s;
                      color: white
                         
                       
                  }

                  .mud:hover{
                        background-image: url(roxo.gif);
                        transition: 1.5s;
                       height: 50%;
                       font-weight: bold;
                       margin-right: -2px;
                       margin-left: -100px;
                      padding-left: 30px;
                      border-radius: 20px;
                      transition: 1.2s;
                      margin-top: -30px;
                      padding-top: 20px;
                      color: yellow;
                      background-color: black;

                  }


                  body{ 
                      background-image: url(roxo.gif);
                      background-size: cover;
                      background-repeat: no-repeat;
                      
                  }

                  .bt1{
                       border-radius: 20px;
                       color: white;
                       background-color: purple;
                       font-size: 20px;
                       background-image: url(roxo.gif);
                       transition: 5ms;
                       background-color: darkblue;
                       color: yellow;
                  }

                  .bt1:hover{
                    background-image: url(gifsas.gif);
                    transition: 5ms;
                    background-color: darkblue;
                    color: yellow;
                  }
                  
           </style>

     </head>

     <body>

        
        <section class="s53s"> 

        

        <?php
        $apiKey = "your_openai_api_key"; // Replace with your actual API key
        $endpoint = "https://api.openai.com/v1/completions";

        $data = [
            "model" => "text-davinci-003",
            "prompt" => "Hello, how can I assist you?",
            "max_tokens" => 100,
            "temperature" => 0.7
        ];

        $options = [
            "http" => [
                "header" => "Content-Type: application/json\r\n" .
                            "Authorization: Bearer " . $apiKey . "\r\n",
                "method" => "POST",
                "content" => json_encode($data),
            ],
        ];

        $context = stream_context_create($options);
        $response = file_get_contents($endpoint, false, $context);

        if ($response === FALSE) {
            echo "Error connecting to the AI.";
        } else {
            $response = json_decode($response, true);
            if (isset($response['choices'][0]['text'])) {
                echo "<div class='mud'>" . htmlspecialchars($response['choices'][0]['text']) . "</div>";
            } else {
                echo "No response from the AI.";
            }
        }
        ?>
           
            

        </section>
     </body>


</html>
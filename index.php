    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NTI- Pio Décimo</title>
        <style>

          #titulos{ 
            /* flex-direction: column; */
            text-align: center;
            font-size: 24px;
            font-style: normal;
            color: rgb(0, 0, 0);
            
          }

          #logo{

            text-align: center;

          }

          .card{
            
            box-shadow: 3px 6px 8px 3px rgba(10, 10, 10, 0.5);
            border-radius: 10px;
            width: 400px;
            height: 300px;
          }

          #cont_toner{
            margin-bottom:50px;
          }

    </style>

    <body>
      <div class="container">
        <div id="logo">
          <img src="./images/logo.png" />
        </div>
        <div class="card">
          <div class="card-body">
            <div class="alert alert-primary">
              <h1 id="titulos">Bem vindo !</h1>
              <br>
              <h1 id="titulos">Controle de Toners e Impressoras</h1>
            </div>
          
            <form method="post" action="admin.php">
              <table>
                <tbody>
                  <tr>
                    <td>
                      <input type="submit" style="width:160;height:25" id="cont_toner" value="Controle de tonner"/>
                    </td>
                  </tr>
                </tbody>
              </table>
            </form>
            <form method="post" action="statussetores.php">
              <table>
                <tbody>
                  <tr>
                    <td>
                      <input type="submit" style="width:160;height:25" value="Impressora/setores" />
                    </td>
                  </tr>
                </tbody>
              </table>
            </form>
          </div>
        </div>
      </div>
    </body>
    </html>
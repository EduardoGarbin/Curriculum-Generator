<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title> Projobs - Gerador de Currículo Grátis </title>
    <link rel="icon" href="images/curriculo.png">
    <link rel="stylesheet" type="text/css" href="front.css">
</head>

<body>

    <!-- Menu -->
    <div class="menu-container">
        <div class="logo-container">
            <img src="images/curriculo.png" />
            <strong> Projobs </strong>
        </div>
    </div>
    <div class="container">
        <div class="message">
            <span class="main-message"> Gerador de Currículo </span>
            <span class="sec-message"> Crie seu currículo profissional de forma totalmente online e grátis! </span>
        </div>
        <div class="info-projobs">
            <h2> Seja bem-vindo(a) </h2>
            <span> Nessa época tão difícil, um emprego ajuda muita gente, por isso, a equipe da Projobs desenvolveu este
                site para você que procura uma nova profissão ou até para quem quer ingressar no mercado de trabalho.
            </span>
            <span> O currículo segue diversas recomendações de profissionais na seleção e no recrutamento de pessoas.
                Esperamos que você alcance seus objetivos! </span>
        </div>
        <div class="info-curriculo">
            <form method='POST' action='gerador.php' id='form'>

                <div class="dados-p">
                    <h4> 1. DADOS PESSOAIS </h4>
                    <div class="linha">
                        <div class="coluna">
                            <p> Nome Completo: </p>
                            <input class="form-control inputmedio" type="text" name="nome" required="required" />
                        </div>
                        <div class="coluna">
                            <p> Nacionalidade: </p>
                            <input class="form-control inputmedio" type="text" name="nacionalidade" required="required" />
                        </div>
                        <div class="coluna">
                            <p> Estado: </p>
                            <input class="inputmedio form-control" type="text" name="estado" required="required" />
                        </div>
                        <div class="coluna">
                            <p> Cidade: </p>
                            <input class="inputmedio form-control" type="text" name="cidade" required="required" />
                        </div>
                        <div class="coluna">
                            <p> Endereço: </p>
                            <input class="inputgrande form-control" type="text" name="endereço" required="required" />
                        </div>
                        <div class="coluna">
                            <p> Idade: </p>
                            <div class="d-flex">
                                <input class="inputmini form-control" type="number" name="idade" required="required" />
                                <div class="input-group-text"> anos </div>
                            </div>
                        </div>
                        <div class="coluna">
                            <p> Email: </p>
                            <input class="form-control inputmedio" type="email" name="email" required="required" />
                        </div>
                        <div class="coluna">
                            <p> Telefone 1: </p>
                            <input class="form-control inputmini" type="number" name="telefone1" required="required" />
                        </div>
                        <div class="coluna">
                            <p> Telefone 2: </p>
                            <input class="form-control inputmini" type="number" name="telefone2" required="required" />
                        </div>
                    </div>
                </div>


                <div class="dados-p">
                    <h4> 2. OBJETIVO </h4>
                    <!-- <div class="linha">
                        <div class="coluna"> -->
                        <p> Insira sua meta como profissional: </p>
                            <input class="form-control inputmaior" type="text" name="objetivo" required="required" />
                        <!-- </div>
                    </div> -->
                </div>
                <div class="dados-p" id='formacao-container'>
                    <h4> 3. FORMAÇÃO ACADÊMICA </h4>
                    <div class="linha">
                        <div class="coluna">
                            <p> Curso: </p>
                            <input class="form-control inputmaior" type="text" name="curso[]" required="required" />
                        </div>
                    </div>
                    <div class="linha">
                        <div class="coluna">
                            <p> Instituição: </p>
                            <input class="form-control inputmedio" type="text" name="Instituicao[]" required="required" />
                        </div>
                    </div>
                    <div class="linha">
                        <div class="coluna">
                            <p> Ano de Conclusão: </p>
                            <select name="anodeconclusao" class="form-select" required="required">
                                <option value='Concluído em:'> Concluído em: </option>
                                <option value='Previsão de conclusão em:'> Previsão de conclusão em: </option>
                            </select>
                        </div>
                    </div>

                    <div class="linha">
                        <div class="coluna">
                            <p> Ano: </p>
                            <input class="form-control inputmenor" type="number" name="ano[]" required="required" />
                        </div>
                    </div>

                    <button class="add-btn btn btn-success" id='add-academic-button' onclick='academicFormation()'>Adicionar</button>
                </div>
                <div class="dados-p" id='professional-container'>
                    <h4> 4. EXPERIÊNCIA PROFISSIONAL </h4>
                    <div class="linha">
                        <div class="coluna">
                            <p> Empresa: </p>
                            <input class="form-control inputmenor" type="text" name="empresa[]" required="required" />
                        </div>
                        <div class="coluna">
                            <p> Ano de Entrada: </p>
                            <input class="form-control inputmini" type="text" name="anoentrada[]" required="required" />
                        </div>
                        <div class="coluna">
                            <p> Ano de Saída: </p>
                            <input class="form-control inputmini" type="text" name="anosaida[]" required="required" />
                        </div>
                        <div class="coluna">
                            <p> Cargo: </p>
                            <input class="form-control inputmenor" type="text" name="cargo[]" required="required" />
                        </div>
                        <div class="coluna">
                            <p> Principais atividades desempenhadas no cargo: </p>
                            <textarea type="text" class="form-control" rows="4" cols="200" name="atividades[]" required="required"></textarea>
                        </div>
                    </div>
                    <button class="add-btn btn btn-success" id='add-professional-button' onclick='professionalExperience()'>Adicionar</button>
                </div>
                <div class="dados-p" id='qualifications-container'>
                    <h4> 5. QUALIFICAÇÕES </h4>
                    <!-- <div class="linha">
                        <div class="coluna"> -->
                        <p> Insira suas competência e atividades complementares: </p>
                        <input class="form-control inputmaior" type="text" name="qualificacoes[]" required="required" />
                        <!-- </div>
                    </div> -->
                    <button class="add-btn btn btn-success" id='add-qualification-button' onclick='addQualifications()'>Adicionar</button>
                </div>
                <div class="dados-p">
                    <h4> 6. INFORMAÇÕES ADICIONAIS </h4>
                    <div class="linha">
                        <div class="coluna">
                        <p> Deseja informar mais alguma coisa? Digite aqui: </p>
                            <textarea type="text" class="form-control" rows="4" cols="200" name="informacoesadicionais"></textarea>
                        </div>
                    </div>
                </div>
                <div class="botao">
                    <button type="submit" id="botao" class="add-btn btn btn-success btn-lg"> Gerar Currículo </button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        var formacoes = 0;

        function academicFormation() {
            if (formacoes < 2) {
                $('#add-academic-button').remove()
                $('#formacao-container').append("<hr/><p> Curso: </p><input class='form-control inputmaior' type='text' name='curso[]' required='required' /><div class='linha'><div class='coluna'><p> Instituição: </p><input class='form-control inputmedio' type='text' name='Instituicao[]' required='required' /></div></div><div class='linha'><div class='coluna'><p> Ano de Conclusão: </p><select name='anodeconclusao' class='form-select' required='required'><option value='Concluído em:'> Concluído em: </option><option value='Previsão de conclusão em:'> Previsão de conclusão em: </option></select></div></div><div class='linha'><div class='coluna'><p> Ano: </p><input class='form-control inputmenor' type='number' name='ano[]' required='required' /></div></div><button class='add-btn btn btn-success' id='add-academic-button' onclick='academicFormation()'>Adicionar</button>")
                formacoes++
            } else {
                alert('Número máximo atingido')
            }
        }
        var experiencias = 0;

        function professionalExperience() {
            if (experiencias < 2) {
                $('#add-professional-button').remove()
                $('#professional-container').append("<hr/><p> Empresa: </p><input class='form-control inputmenor' type='text' name='empresa[]' required='required' /><div class='coluna'><p> Ano de Entrada: </p><input class='form-control inputmini' type='text' name='anoentrada[]' required='required' /></div><div class='coluna'><p> Ano de Saída: </p><input class='form-control inputmini' type='text' name='anosaida[]' required='required' /></div><div class='coluna'><p> Cargo: </p><input class='form-control inputmenor' type='text' name='cargo[]' required='required' /></div><div class='coluna'><p> Principais atividades desempenhadas no cargo: </p><textarea type='text' class='form-control' rows='3' cols='140' name='atividades[]'required='required'></textarea></div></div><button class='add-btn btn btn-success' id='add-professional-button' onclick='professionalExperience()'>Adicionar</button>")
                experiencias++
            } else {
                alert('Número máximo atingido')
            }
        }
        var qualificacoes = 0;

        function addQualifications() {
            if (qualificacoes < 2) {
                $('#add-qualification-button').remove()
                $('#qualifications-container').append("<hr/><input class='form-control inputmaior' type='text' name='qualificacoes[]' required='required' /><button class='add-btn btn btn-success' id='add-qualification-button' onclick='addQualifications()'>Adicionar</button>")
                qualificacoes++
            } else {
                alert('Número máximo atingido')
            }
        }
    </script>
</body>

</html>
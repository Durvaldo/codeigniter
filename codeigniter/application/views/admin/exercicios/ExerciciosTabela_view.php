<link rel="stylesheet" href="<?= base_url('public/styles/style24.css')?>">
<main id="body">
    <div id="header"></div>
    <div id="main">
        <div class="container">
            <table class="ex1">
                <tr>
                    <td class="ex1">1</td>
                    <td class="ex1">2</td>
                    <td class="ex1" rowspan="2">3</td>
                    <td class="ex1">4</td>
                </tr>
                <tr>
                    <td class="ex1">5</td>
                    <td class="ex1">6</td>
                    <td class="ex1">7</td>
                </tr>
                <tr>
                    <td class="ex1" colspan="3">8</td>
                    <td class="ex1">9</td>
                </tr>
                <tr>
                    <td class="ex1" rowspan="2">10</td>
                    <td class="ex1" colspan="2">11</td>
                    <td class="ex1">12</td>
                </tr>
                <tr>
                    <td class="ex1">13</td>
                    <td class="ex1">14</td>
                    <td class="ex1">15</td>
                </tr>
            </table>
            <table class="ex1">
                <tr>
                    <td class="ex1" colspan="4">A</td>
                    <td class="ex1" rowspan="4">B</td>
                </tr>
                <tr>
                    <td class="ex1" rowspan="4">C</td>
                    <td class="ex1">D</td>
                    <td class="ex1">E</td>
                    <td class="ex1">F</td>
                </tr>
                <tr>
                    <td class="ex1">G</td>
                    <td class="ex1">H</td>
                    <td class="ex1">I</td>
                </tr>
                <tr>
                    <td class="ex1">J</td>
                    <td class="ex1">L</td>
                    <td class="ex1">M</td>
                </tr>
                <tr>
                    <td class="ex1" colspan="4">N</td>
                </tr>
            </table>
        </div>

        <div class="container">
            <table class="ex2">
                <caption>Filmes Favoritos</caption>
                <tr>
                    <th scope="col" class="ex2">Grupo</th>
                    <th scope="col" class="ex2">Nomes</th>
                    <th scope="colgroup" class="ex2" colspan="3">Filmes</th>
                </tr>
                <tr>
                    <th scope="rowgroup" class="ex2" rowspan="3">Mulheres</th>
                    <td class="ex2">Ana Maria Santos</td>
                    <td class="ex2">Alien</td>
                    <td class="ex2">Rambo</td>
                    <td class="ex2">Vingadores</td>
                </tr>
                <tr>
                    <td class="ex2">Beatriz Souza</td>
                    <td class="ex2">Hulk</td>
                    <td class="ex2">Inception</td>
                    <td class="ex2">Batman</td>
                </tr>
                <tr>
                    <td class="ex2">Cl??udia Melo</td>
                    <td class="ex2">Oblivion</td>
                    <td class="ex2">Matrix</td>
                    <td class="ex2">Big Hero</td>
                </tr>
                <tr>
                    <th scope="rowgroup" class="ex2" rowspan="3">Homens</th>
                    <td class="ex2">Bruno mendon??a</td>
                    <td class="ex2">Intoc??veis</td>
                    <td class="ex2">Amn??sia</td>
                    <td class="ex2">Gladiador</td>
                </tr>
                <tr>
                    <td class="ex2">Daniel Louren??o</td>
                    <td class="ex2">Wall-E</td>
                    <td class="ex2">Oldboy</td>
                    <td class="ex2">Dangal</td>
                </tr>
                <tr>
                    <td class="ex2">Fabiano Mota</td>
                    <td class="ex2">Star Wars 5</td>
                    <td class="ex2">Taxi Drive</td>
                    <td class="ex2">Toy Story</td>
                </tr>
            </table>
        </div>

        <div class="container">
            <table class="ex3">
                <caption>Faculdade Fraldinha</caption>
                <thead >
                    <tr>
                        <th scope="col" rowspan="2">??rea</th>
                        <th scope="col" rowspan="2">Dissiplina</th>
                        <th scope="colgroup" colspan="2">Notas</th>
                        <th scope="col" rowspan="2">M??dia</th>
                    </tr>
                    <tr>
                        <th scope="col">Nota 1</th>
                        <Th scope="col">Nota 2</Th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="rowgroup" rowspan="4">Exatas</th>
                        <td>Matem??tica</td>
                        <td class="nota">0.0</td>
                        <td class="nota">0.0</td>
                        <td class="nota">0.0</td>
                    </tr>
                    <tr>
                        <td>Fisica</td>
                        <td class="nota">0.0</td>
                        <td class="nota">0.0</td>
                        <td class="nota">0.0</td>
                    </tr>
                    <tr>
                        <td>Quimica</td>
                        <td class="nota">0.0</td>
                        <td class="nota">0.0</td>
                        <td class="nota">0.0</td>
                    </tr>
                    <tr>
                        <td>Biologia</td>
                        <td class="nota">0.0</td>
                        <td class="nota">0.0</td>
                        <td class="nota">0.0</td>
                    </tr>
                    <tr>
                        <th class="media" scope="row" colspan="4">M??dia de exatas</th>
                        <td class="nota">0.0</td>
                    </tr>
                    <tr>
                        <th scope="rowgroup" rowspan="2">Humanas</th>
                        <td>Hist??ria</td>
                        <td class="nota">0.0</td>
                        <td class="nota">0.0</td>
                        <td class="nota">0.0</td>
                    </tr>
                    <tr>
                        <td>Geografia</td>
                        <td class="nota">0.0</td>
                        <td class="nota">0.0</td>
                        <td class="nota">0.0</td>
                    </tr>
                    <tr>
                        <th class="media" scope="row" colspan="4">M??dia de exatas</th>
                        <td class="nota">0.0</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="container">
            <table class="ex4">
                <caption>Teste de colunas</caption>
                <colgroup>
                    <col class="cnome">
                    <col class="csexo">
                    <col class="cidade">
                    <col class="cprofissao">
                </colgroup>
                <tbody>
                    <tr>
                        <th>Nome</th>
                        <th>Sexo</th>
                        <th>Idade</th>
                        <th>Profissao</th>
                    </tr>
                    <tr>
                        <td>Ana Maria</td>
                        <td>F</td>
                        <td>25</td>
                        <td>Jornalista</td>
                    </tr>
                    <tr>
                        <td>Claudio</td>
                        <td>M</td>
                        <td>28</td>
                        <td>Programador</td>
                    </tr>
                    <tr>
                        <td>Gustavo</td>
                        <td>M</td>
                        <td>42</td>
                        <td>Professor</td>
                    </tr>
                    <tr>
                        <td>Durvaldo</td>
                        <td>M</td>
                        <td>26</td>
                        <td>Engenheiro</td></tr>
                    <tr>
                        <td>Maria</td>
                        <td>F</td>
                        <td>38</td>
                        <td>M??dica</td>
                    </tr>
                    <tr>
                        <td>Joisce</td>
                        <td>F</td>
                        <td>20</td>
                        <td>Editora</td>
                    </tr>
                </tbody>
            </table>
        </div>
    
    </div>
    <div id="footer"></div>
</main>

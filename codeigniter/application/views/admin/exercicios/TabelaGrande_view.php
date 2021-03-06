<link rel="stylesheet" href="<?= base_url('public/styles/style23.css')?>">
<main id="body">
    <div id="header"></div>
    <div id="main">
        <!-- 
            ANATOMIA PARA TABELA GRANDE
            TABLE
                THEAD
                    TR, TD, TH
                TBODY
                    TR, TD, TH
                TFOOT
                    TR, TD, TH
            -->
        <h1>Uso de tabela grande</h1>
        <table>
        <thead>
            <th scope="col" style="width: 10px;">Posição</th>	
            <th scope="col">Unidade federativa</th>	
            <th scope="col">População (2010)</th>	
            <th scope="col">População (2021)</th>        
            <th scope="col" style="width: 50px;">Mudança</th>	
            <th scope="col" style="width: 50px;">% da pop.</th> 
        </thead>
        <tbody>
            <caption>Lista de unidades federativas do Brasil por população</caption>
            <tr>
                <td>1</td>	 
                <td>São Paulo</td>
                <td class="num">41 262 199</td>	
                <td class="num">46 649 132</td>	
                <td>+13.05%	</td>
                <td>21,9%</td>
            </tr>
            <tr>
                <td>2</td>	 
                <td>Minas Gerais</td>	
                <td class="num">19 597 330</td>	
                <td class="num">21 411 923</td>	
                <td>+9.26%</td>
                <td>10,1%</td>
            </tr>
            <tr>
                <td>3</td>	 
                <td>Rio de Janeiro</td>	
                <td class="num">15 989 929</td>	
                <td class="num">17 463 349</td>	
                <td>+9.21%</td>	
                <td>8,2%</td>
            </tr>
            <tr>
                <td>4</td>	
                <td>Bahia Bahia</td>	
                <td class="num">14 016 906</td>	
                <td class="num">14 985 284</td>	
                <td>+6.91%</td>	
                <td>7,1%</td>
            </tr>
            <tr>
                <td>5</td>	 
                <td>Paraná</td>
                <td class="num">10 444 526</td>
                <td class="num">11 597 484</td>
                <td>+11.04%	</td>
                <td>5,4%</td>
            </tr>
            <tr>
                <td>6</td>	 
                <td>Rio Grande do Sul</td>
                <td class="num">10 693 929</td>
                <td class="num">11 466 630</td>
                <td>+7.23%</td>
                <td>5,4%</td>
            </tr>
            <tr>
                <td>7</td>	 
                <td>Pernambuco</td>
                <td class="num">8 796 448</td>
                <td class="num">9 674 793</td>
                <td>+9.98%</td>
                <td>4,5%</td>
            </tr>
            <tr>
                <td>8</td>	 
                <td>Ceará</td>
                <td class="num">8 452 381</td>
                <td class="num">9 240 580</td>
                <td>+9.32%</td>
                <td>4,3%</td>
            </tr>
            <tr>
                <td>9</td>	
                <td>Pará Pará</td>
                <td class="num">7 581 051</td>
                <td class="num">8 777 124</td>
                <td>+15.78%</td>
                <td>4,1%</td>
            </tr>
            <tr>
                <td>10</td>	 
                <td>Santa Catarina</td>
                <td class="num">6 248 436</td>
                <td class="num">7 338 473</td>
                <td>+17.44%</td>
                <td>3,4%</td>
            </tr>
            <tr>
                <td>11</td>	 
                <td>Goiás</td>
                <td class="num">6 003 788</td>
                <td class="num">7 206 589</td>
                <td>+20.03%	</td>
                <td>3,4%</td>
            </tr>
            <tr>
                <td>12</td>	 
                <td>Maranhão</td>
                <td class="num">6 574 789</td>
                <td class="num">7 153 262</td>
                <td>+8.80%</td>
                <td>3,4%</td>
            </tr>
            <tr>
                <td>13</td>	 
                <td>Amazonas</td>
                <td class="num">3 483 985</td>
                <td class="num">4 269 995</td>
                <td>+22.56%	</td>
                <td>2,0%</td>
            </tr>
            <tr>
                <td>14</td>	 
                <td>Espírito Santo</td>
                <td class="num">3 514 952</td>
                <td class="num">4 108 508</td>
                <td>+16.89%</td>
                <td>1,9%</td>
            </tr>
            <tr>
                <td>15</td>	 
                <td>Paraíba	</td>
                <td class="num">3 766 528</td>
                <td class="num">4 059 905</td>
                <td>+7.79%</td>
                <td>1,9%</td>
            </tr>
            <tr>
                <td>16</td>	 
                <td>Mato Grosso</td>
                <td class="num">3 035 122</td>
                <td class="num">3 567 234</td>
                <td>+17.53%</td>
                <td>1,7%</td>
            </tr>
            <tr>
                <td>17</td>	 
                <td>Rio Grande do Norte	</td>
                <td class="num">3 168 027</td>
                <td class="num">3 560 903</td>
                <td>+12.40%	</td>
                <td>1,7%</td>
            </tr>
            <tr>
                <td>18</td>	 
                <td>Alagoas</td>
                <td class="num">3 120 494</td>
                <td class="num">3 365 351</td>
                <td>+7.85%</td>
                <td>1,6%</td>
            </tr>
            <tr>
                <td>19</td>	 
                <td>Piauí</td>
                <td class="num">3 118 360</td>
                <td class="num">3 289 290</td>
                <td>+5.48%	</td>
                <td>1,6%</td>
            </tr>
            <tr>
                <td>20</td>	 
                <td>Distrito Federal</td>
                <td class="num">2 570 160</td>
                <td class="num">3 094 325</td>
                <td>+20.39%	</td>
                <td>1,4%</td>
            </tr>
            <tr>
                <td>21</td>	 
                <td>Mato Grosso do Sul	</td>
                <td class="num">2 449 024</td>
                <td class="num">2 839 188</td>
                <td>+15.93%	</td>
                <td>1,3%</td>
            </tr>
            <tr>
                <td>22</td>	 
                <td>Sergipe</td>
                <td class="num">2 068 017</td>
                <td class="num">2 338 474</td>
                <td>+13.07%	</td>
                <td>1,1%</td>
            </tr>
            <tr>
                <td>23</td>	 
                <td>Rondônia</td>
                <td class="num">1 562 409</td>
                <td class="num">1 815 278</td>
                <td>+16.18%	</td>
                <td>0,8%</td>
            </tr>
            <tr>
                <td>24</td>	 
                <td>Tocantins</td>
                <td class="num">1 383 445</td>
                <td class="num">1 607 363</td>
                <td>+16.18%	</td>
                <td>0,7%</td>
            </tr>
            <tr>
                <td>25</td>	 
                <td>Acre</td>
                <td class="num">733 559</td>
                <td class="num">906 876</td>
                <td>+23.63%</td>
                <td>0,4%</td>
            </tr>
            <tr>
                <td>26</td>	 
                <td>Amapá</td>
                <td class="num">669 526</td>
                <td class="num">877 613</td>
                <td>+31.08%</td>
                <td>0,4%</td>
            </tr>
            <tr>
                <td>27</td>	 
                <td>Roraima</td>
                <td class="num">450 479</td>
                <td class="num">652 713</td>
                <td>+44.89%</td>
                <td>0,3%</td>
            </tr>
        </tbody>
        <tfoot>
            <td class="resetar" colspan="3"></td>
            <th scope="row">Total Habitantes</th>
            <td colspan="3"><strong>213 317 639</strong></td>
        </tfoot>
        </table>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, magni ipsa. Laboriosam obcaecati sint quos quia consectetur esse reprehenderit rem consequatur nam sunt laborum, fugit sapiente excepturi eos at praesentium. <br>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta sapiente tempora porro temporibus vel consequuntur, assumenda necessitatibus doloremque dolore ex eos corrupti! Animi fuga eligendi reprehenderit sit nam amet recusandae.
        </p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, magni ipsa. Laboriosam obcaecati sint quos quia consectetur esse reprehenderit rem consequatur nam sunt laborum, fugit sapiente excepturi eos at praesentium. <br>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta sapiente tempora porro temporibus vel consequuntur, assumenda necessitatibus doloremque dolore ex eos corrupti! Animi fuga eligendi reprehenderit sit nam amet recusandae.
        </p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, magni ipsa. Laboriosam obcaecati sint quos quia consectetur esse reprehenderit rem consequatur nam sunt laborum, fugit sapiente excepturi eos at praesentium. <br>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta sapiente tempora porro temporibus vel consequuntur, assumenda necessitatibus doloremque dolore ex eos corrupti! Animi fuga eligendi reprehenderit sit nam amet recusandae.
        </p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, magni ipsa. Laboriosam obcaecati sint quos quia consectetur esse reprehenderit rem consequatur nam sunt laborum, fugit sapiente excepturi eos at praesentium. <br>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta sapiente tempora porro temporibus vel consequuntur, assumenda necessitatibus doloremque dolore ex eos corrupti! Animi fuga eligendi reprehenderit sit nam amet recusandae.
        </p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, magni ipsa. Laboriosam obcaecati sint quos quia consectetur esse reprehenderit rem consequatur nam sunt laborum, fugit sapiente excepturi eos at praesentium. <br>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta sapiente tempora porro temporibus vel consequuntur, assumenda necessitatibus doloremque dolore ex eos corrupti! Animi fuga eligendi reprehenderit sit nam amet recusandae.
        </p>
            
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, magni ipsa. Laboriosam obcaecati sint quos quia consectetur esse reprehenderit rem consequatur nam sunt laborum, fugit sapiente excepturi eos at praesentium. <br>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta sapiente tempora porro temporibus vel consequuntur, assumenda necessitatibus doloremque dolore ex eos corrupti! Animi fuga eligendi reprehenderit sit nam amet recusandae.
        </p>
                
    </div>
</main>
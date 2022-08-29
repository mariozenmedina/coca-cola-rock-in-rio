<?php include_once 'header.php' ?>
<input type="checkbox" name="menu-inp" id="menu-inp">
<nav id="menu">
	<div class="container">
		<label id="menu-label" for="menu-inp">
			<svg width="22" height="23">
				<rect width="22" height="1" x="0" y="4" />
				<rect width="22" height="1" x="0" y="11" />
				<rect width="22" height="1" x="0" y="18" />
			</svg>
		</label>
	</div>
	<ul>
		<li><a class="go" data-go="construindo">Construindo juntos um futuro mais sustentável</a></li>
		<li><a class="go" data-go="temmais">E tem mais!</a></li>
		<li><a class="go" data-go="descartou">Descartou, juntou, ganhou</a></li>
		<li><a class="go" data-go="numeros">Nossos números</a></li>
		<li><a class="go" data-go="retornaveis">Garrafas retornáveis</a></li>
		<li><a class="go" data-go="pordentro">Quer ficar ainda mais por dentro?</a></li>
	</ul>
</nav>
<section id="capa">
	<div class="container">
		<h1 title="Coca-Cola no Rock in Rio">
			<img id="logo-coca" src="./img/logo-coca-cola.svg"><br>
			<span>no</span><br>
			<img id="logo-rir" src="./img/logo-rir.png">
		</h1>
	</div>
</section>
<section id="sobre">
	<div class="container">
		<p>Se você chegou até aqui é porque, assim como nós, se preocupa com o meio ambiente. Então fique sabendo: a longevidade da Coca-Cola Brasil só é possível se a nossa forma de trabalhar trouxer ganhos para a sociedade e para o planeta. Aqui você descobrirá o que estamos fazendo para isso se tornar realidade. Muito bem-vindo(a)!</p>
	</div>
	<div class="image"></div>
</section>
<section id="construindo">
	<div class="container items">
		<?php include_once './img/construindo-lines.php'; ?>
		<h2 class="titulo">Construindo juntos um futuro mais sustentável</h2>
		<p>Quando unimos esforços e conhecimento podemos construir uma sociedade mais sustentável. Por isso Braskem, Coca-Cola Heineken®, Natura e Rock in Rio se uniram para mostrar que o descarte correto e a reciclagem do plástico trazem vantagens para todos.</p>
		<div class="item-1">
			<img src="./img/construindo-logo-rir.png">
			<p>Tudo começa na organização do evento, que faz do desenvolvimento sustentável uma prioridade. Essa parceria com o Rock in Rio possibilita ações de conscientização que começam no festival e vão além, provocando mudanças de comportamento.</p>
		</div>
		<div class="item-2">
			<img src="./img/construindo-logo-coca-heineken.png">
			<p>Estimulam o descarte correto dos milhões de copos plásticos usados nos sete dias de Rock in Rio.</p>
		</div>
		<div class="item-3">
			<img src="./img/construindo-logo-braskem.png">
			<p>Facilita o descarte correto do plástico, coletando os resíduos em seus estandes e estimulando a troca por experiências e brindes exclusivos. Depois do evento, transformará os copos em resina reciclada.</p>
		</div>
		<div class="item-4">
			<img src="./img/construindo-logo-natura.png">
			<p>A resina reciclada será usada na fabricação de embalagens dos produtos natura, transformando o que era resíduo em produto novamente.</p>
		</div>
		<h3>Cinco marcas, <br>uma iniciativa:</h3>
		<p>Mostrar que o plástico pode, e deve, ser reutilizado e voltar à cadeia de consumo. Uma mensagem poderosa que nasce em um dos maiores festivais de música do mundo e continua para além de suas fronteiras, contribuindo para mudanças reais na sociedade.</p>
	</div>
</section>
<section id="temmais">
	<div class="container">
		<h2 class="titulo">E tem mais!</h2>
		<div class="row">
			<div class="col-12 p0">
				<img src="./img/temmais-garrafas.png">
			</div>
		</div>
		<h3>156 mil</h3>
		<p>minigarrafas PET de Coca-Cola usadas durante o festival vão se tornar novas embalagens de <nobr>Coca-Cola</nobr> após reciclagem.</p>
	</div>
</section>
<section id="descartou">
	<div class="container">
		<h2 class="titulo">Descartou, juntou, ganhou</h2>
		<p>Aumente o som e diminua os resíduos! Para que essa iniciativa seja eficaz, contamos com o seu engajamento! Em troca, você ainda ganha brindes, experiências e ajuda o meio ambiente. Bora?</p>
		<ul>
			<li>
				<img src="./img/n1.svg">
				<p>Leve o seu plástico para um dos pontos de descarte espalhados pela Cidade do Rock.</p>
			</li>
			<li>
				<img src="./img/n2.svg">
				<p>Acumule pontos por cada resíduo descartado corretamente (pontos serão computados por CPF).</p>
			</li>
			<li>
				<img src="./img/n3.svg">
				<p>Troque por brindes e experiências, nos pontos de descarte da Brasken, e siga curtindo o Festival!</p>
			</li>
		</ul>
		<h3>Veja o que pode ganhar:</h3>
		<div id="slider" class="slider">
            <div class="wrapper">
                <div id="slides" class="slides">
                	<?php for($i=1;$i<=13;$i++): ?>
                	<span class="slide">
                		<img src="./img/premios/premio_<?php echo $i<10 ? '0'.$i : $i; ?>.png">
                	</span>
                	<?php endfor; ?>
                </div>
            </div>
            <a id="prev" class="control prev"></a>
			<a id="next" class="control next"></a>
        </div>
        <div class="pontos">
        	<img src="./img/pontos/pontos_1.png">
        	<img src="./img/pontos/pontos_2.png">
        	<img src="./img/pontos/pontos_3.png">
        	<img src="./img/pontos/pontos_4.png">
        </div>
	</div>
</section>
<section id="numeros">
	<div class="container">
		<h2 class="titulo">Nossos <br>números</h2>
		<p>Quer saber mais? Clique em um tema abaixo e veja como a <nobr>Coca-Cola</nobr> Brasil está avançando em diferentes áreas!</p>
		<input checked type="radio" name="nmb" class="nmb-inp nmb-inp-1" id="nmb-inp-1" />
		<input type="radio" name="nmb" class="nmb-inp nmb-inp-2" id="nmb-inp-2" />
		<input type="radio" name="nmb" class="nmb-inp nmb-inp-3" id="nmb-inp-3" />
		<input type="radio" name="nmb" class="nmb-inp nmb-inp-4" id="nmb-inp-4" />
		<input type="radio" name="nmb" class="nmb-inp nmb-inp-5" id="nmb-inp-5" />
		<input type="radio" name="nmb" class="nmb-inp nmb-inp-6" id="nmb-inp-6" />
		<ul class="botoes">
			<li><label onclick="goNumbers()" for="nmb-inp-1">Mundo sem resíduos</label></li>
			<li><label onclick="goNumbers()" for="nmb-inp-2">Reciclar pelo Brasil</label></li>
			<li><label onclick="goNumbers()" for="nmb-inp-3">Eficiência hídrica</label></li>
			<li><label onclick="goNumbers()" for="nmb-inp-4">Bolsa floresta</label></li>
			<li><label onclick="goNumbers()" for="nmb-inp-5">Água+Acesso</label></li>
			<li><label onclick="goNumbers()" for="nmb-inp-6">Energia e clima</label></li>
		</ul>
		<div class="dados dados-1">
			<h3>Mundo sem resíduos</h3>
			<div class="info">
				<img src="./img/numbers/recicle.svg">
				<div>
					<h4 class="counter" data-counter-value="100" data-counter-after="%">100%</h4>
					<p>é o volume das embalagens que a companhia coloca no mercado que terão o destino correto até 2030.</p>
				</div>
			</div>
			<div class="info">
				<img src="./img/numbers/bottles.svg">
				<div>
					<h4 class="counter" data-counter-value="100" data-counter-after="%">100%</h4>
					<p>das embalagens utilizadas pela Coca-Cola Company serão feitas de material reciclável até 2025.</p>
				</div>
			</div>
		</div>
		<div class="dados dados-2">
			<h3>Reciclar pelo Brasil</h3>
			<div class="info">
				<img src="./img/numbers/coop.svg">
				<div>
					<h4 class="counter" data-counter-value="200" data-counter-after="">200</h4>
					<p>cooperativas e associações apoiadas.</p>
				</div>
			</div>
			<div class="info">
				<img src="./img/numbers/scav.svg">
				<div>
					<h4 class="counter" data-counter-value="4.5" data-counter-after=" mil">4,5 mil</h4>
					<p>catadores beneficiados.</p>
				</div>
			</div>
			<div class="info">
				<img src="./img/numbers/recicle.svg">
				<div>
					<h4 class="counter" data-counter-value="330" data-counter-after=" mil">330 mil</h4>
					<p>toneladas de resíduos recicláveis.</p>
				</div>
			</div>
			<p class="help">*Reciclar pelo Brasil foi lançado em 2017 por meio de uma parceria entre a Coca-Cola Brasil e empresas do setor de alimentos e bebidas.</p>
		</div>
		<div class="dados dados-3">
			<h3>Eficiência hídrica</h3>
			<div class="info">
				<img src="./img/numbers/water.svg">
				<div>
					<h4 class="counter" data-counter-value="-38.9" data-counter-after="%">-38,9%</h4>
					<p>de redução acumulada do uso da água desde 2001.</p>
				</div>
			</div>
			<div class="info">
				<img src="./img/numbers/tap.svg">
				<div>
					<h4 class="counter" data-counter-value="1.55" data-counter-after="">1,55</h4>
					<p>litro de água por litro de bebida (L/L) - índice de eficiência hídrica bateu recorde em 2020.</p>
				</div>
			</div>
			<p class="help">*Desde 2015, a empresa devolve para a natureza e para a sociedade um volume superior a toda a água captada.</p>
		</div>
		<div class="dados dados-4">
			<h3>Bolsa floresta</h3>
			<div class="info">
				<img src="./img/numbers/comunity.svg">
				<div>
					<h4 class="counter" data-counter-value="504" data-counter-after="">504</h4>
					<p>comunidades beneficiadas no Amazonas.</p>
				</div>
			</div>
			<div class="info">
				<img src="./img/numbers/trees.svg">
				<div>
					<h4 class="counter" data-counter-value="103" data-counter-after=" mil">103 mil</h4>
					<p>hectares conservados e protegidos da Floresta e da bacia hidrográfica amazônicas.</p>
				</div>
			</div>
			<p class="help">*Por meio do investimento viabilizado pela Coca-Cola na iniciativa em parceria com a Fundação Amazônia Sustentável (FAS).</p>
		</div>
		<div class="dados dados-5">
			<h3>Água+acesso</h3>
			<div class="info">
				<img src="./img/numbers/people.svg">
				<div>
					<h4 class="counter" data-counter-value="130" data-counter-after=" mil">130 mil</h4>
					<p>pessoas beneficiadas.</p>
				</div>
			</div>
			<div class="info">
				<img src="./img/numbers/comunity.svg">
				<div>
					<h4 class="counter" data-counter-value="349" data-counter-after="">349</h4>
					<p>comunidades.</p>
				</div>
			</div>
			<div class="info">
				<img src="./img/numbers/brazil.svg">
				<div>
					<h4 class="counter" data-counter-value="8" data-counter-after="">8</h4>
					<p>estados brasileiros.</p>
				</div>
			</div>
			<p class="help">*Programa para contribuir com a ampliação e melhoria do acesso à água tratada em comunidades rurais e isoladas do país.</p>
		</div>
		<div class="dados dados-6">
			<h3>Energia e clima</h3>
			<div class="info">
				<img src="./img/numbers/co2.svg">
				<div>
					<h4 class="counter" data-counter-value="25" data-counter-after="%">25%</h4>
					<p>é o volume que vamos reduzir, até 2030, em emissões totais de carbono em relação aos níveis de 2015.</p>
				</div>
			</div>
			<div class="info">
				<img src="./img/numbers/bottles.svg">
				<div>
					<h4 class="counter" data-counter-value="33" data-counter-after="%">33%</h4>
					<p>da energia consumida pela Solar, nossa engarrafadora, foi proveniente de fontes renováveis.</p>
				</div>
			</div>
			<div class="info">
				<img src="./img/numbers/energy.svg">
				<div>
					<h4 class="counter" data-counter-value="100" data-counter-after="%">100%</h4>
					<p>é a meta de energia renovável já em 2025 na Solar.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="retornaveis">
	<div class="container">
		<h2 class="titulo">Garrafas retornáveis</h2>
		<p>E não acabou não! Na Coca-Cola, 4 em cada 10 garrafas vendidas na América Latina são embalagens retornáveis. Veja como funciona:</p>
		<h3>As vantagens da garrafa retornável: um hábito cada vez mais inovador</h3>
		<div class="iframe">
			<iframe src="https://www.youtube.com/embed/jaxSKBeKcL0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	</div>
</section>
<section id="pordentro">
	<div class="container">
		<h2 class="titulo">Quer ficar ainda mais por dentro?</h2>
		<ul>
			<li>
				<img src="./img/pordentro-icon-1.png">
				<p>Crystal tem primeira garrafa de água mineral produzida apenas com PET reciclado no Brasil</p>
			</li>
			<li>
				<img src="./img/pordentro-icon-2.png">
				<p>Adeus, economia linear. Bem-vinda, economia circular</p>
			</li>
			<li>
				<img src="./img/pordentro-icon-3.png">
				<p>Confira nosso Relatório de Sustentabilidade 2020</p>
			</li>
		</ul>
	</div>
</section>
<section id="seclogo">
	<div class="container">
		<img src="./img/logo-coca-cola-brasil.svg">
	</div>
</section>
<section id="rodape">
	<div class="container">
		<span>Acompanhe:</span>
		<ul>
			<li><a href=""><?php include './img/ms-fb.php'; ?></a></li>
			<li><a href=""><?php include './img/ms-tw.php'; ?></a></li>
			<li><a href=""><?php include './img/ms-ins.php'; ?></a></li>
			<li><a href=""><?php include './img/ms-yt.php'; ?></a></li>
			<li><a href=""><?php include './img/ms-in.php'; ?></a></li>
		</ul>
		<a href="">Termos de Uso</a><br>
		<a href="">Privacidade</a><br>
		<span>Navegue por aqui:</span><br><br>
		<a class="go" data-go="construindo">Construindo juntos um <br>futuro mais sustentável</a><br>
		<a class="go" data-go="temmais">E tem mais!</a><br>
		<a class="go" data-go="descartou">Descartou, juntou, ganhou</a><br>
		<a class="go" data-go="numeros">Nossos números</a><br>
		<a class="go" data-go="retornaveis">Garrafas retornáveis</a><br>
		<a class="go" data-go="pordentro">Quer ficar ainda mais <br>por dentro?</a>
	</div>
</section>
<?php include_once 'footer.php' ?>
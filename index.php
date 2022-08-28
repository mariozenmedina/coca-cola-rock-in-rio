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
		<li><a href="">Construindo juntos um futuro mais sustentável</a></li>
		<li><a href="">E tem mais!</a></li>
		<li><a href="">Descartou, juntou, ganhou</a></li>
		<li><a href="">Nossos números</a></li>
		<li><a href="">Garrafas retornáveis</a></li>
		<li><a href="">Quer ficar ainda mais por dentro?</a></li>
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
		<h2 class="titulo alt">E tem mais!</h2>
		<img src="./img/temmais-garrafas.png">
		<h3>156 mil</h3>
		<p>minigarrafas PET de Coca-Cola usadas durante o festival vão se tornar novas embalagens de <nobr>Coca-Cola</nobr> após reciclagem.</p>
	</div>
</section>
<section id="descartou">
	<div class="container">
		<h2 class="titulo alt">Descartou, juntou, ganhou</h2>
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
<?php include_once 'footer.php' ?>
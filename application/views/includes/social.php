<li class="social-icons-facebook">
	<a href="<? echo $sociallinks[2]->link; ?>" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
</li>
<li class="social-icons-twitter">
	<a href="<? echo $sociallinks[3]->link; ?>" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
</li>
<li class="social-icons-instagram">
	<a href="<? echo $sociallinks[4]->link; ?>" target="_blank" title="Instragram"><i class="fab fa-instagram"></i></a>
</li>
<li class="social-icons-whatsapp">
	<a href="whatsapp://send?abid=+254<?echo substr($sociallinks[0]->link,-9);?>&phone=+254<?echo substr($sociallinks[0]->link,-9);?>&text=Hi%2C%20I%27m%20interested%20in%20your%20services." target="_blank" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
</li>
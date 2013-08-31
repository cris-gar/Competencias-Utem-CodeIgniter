var curriculum_widget = function(data) {

	this.name = data.name;
	this.picture = data.picture;

}
//widget con la informacion minima visible de un profesor
var Profesor_widget = function(data) {
	/*
	 * json_data diccionario con la informacion basica del profesor return:
	 * widget con la informacion basica
	 */
	this.template = "<div class='@resume'><img class = '@img_perfil' src=img_url><div class='@data'><h3>name</h3><h4>depto</h4></div></div>";

	this.name = data.name;
	this.depto = data.depto;
	this.img_url = data.img_url;

	/* agregar los datos a la plantilla */
	this.template = this.template.replace("name", this.name);
	this.template = this.template.replace("depto", this.depto);
	this.template = this.template.replace("img_url", this.img_url);

	/* setear los estilos en el widget */
	this.template = this.template.replace("@resume", "resume");
	this.template = this.template.replace("@img_perfil", "img_perfil");
	this.template = this.template.replace("@data", "data");

};

$(function() {
	$("#sortable").sortable();
	$("#sortable").disableSelection();
});

/*al cargar la pagina*/
$(document).ready(function() {
	/*cargar cartas de presentacion profesores*/
	//profesores json = ajax_rand_profesores();
	/*mostrar cada uno de los profesores en distintos tiempos de latencia*/
	$(".resume").mouseover(function() {
		$(".resume").animate({
			width : "40%"
		});
	})

	$(".resume").mouseout(function() {
		$(".resume").animate({
			width : "30%"
		});
	})
});
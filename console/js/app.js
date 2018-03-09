
var classeObject = {

  "classes": {
    "1a": {
      "Português": "port_",
      "Matemática": "mat_",
      "Inglês": "ing_",
      "Artes Visuais": "artesvisuais_",
      "Música": "musica_",
      "Educação Física": "edf_",
      "Dança": "danca_"
    },

    "2a": {
      "Português": "port_",
      "Matemática": "mat_",
      "Inglês": "ing_",
      "Artes Visuais": "artesvisuais_",
      "Música": "musica_",
      "Educação Física": "edf_",
      "Dança": "danca_"
    },

    "3a": {
      "Português": "port_",
      "Matemática": "mat_",
      "Inglês": "ing_",
      "Artes Visuais": "artesvisuais_",
      "Música": "musica_",
      "Educação Física": "edf_",
      "Dança": "danca_",
      "Ciências Naturais": "cnaturais_"
    },

    "4a": {
      "Português": "port_",
      "Matemática": "mat_",
      "Inglês": "ing_",
      "Artes Visuais": "artesvisuais_",
      "Música": "musica_",
      "Educação Física": "edf_",
      "Dança": "danca_",
      "Ciências Naturais": "cnaturais_",
      "Ciências Sociais": "csociais_",
    }
  }
}



var slectClasse = document.getElementById("classee"),
    slectDisc = document.getElementById("disciplinaa");

slectClasse.onchange = function() {
    slectDisc.length = 1;
    $("#ktable").html("");
    console.log(this.selectedOptions[0].value);
    if (this.selectedIndex < 1) return;
    for (var disciplina in classeObject['classes'][this.selectedOptions[0].value]) {
        slectDisc.options[slectDisc.options.length] = new Option(disciplina, classeObject['classes'][this.selectedOptions[0].value][disciplina])
    }
};

var ViewerJS;

// Este callback é disparado quando o Formulário for carregado pela primeira vez no Navegador.
// Este é o momento onde os campos são criados em tela. É neste momento que vamos criar o 
// objeto "ViewerJS", pois é quando o Iframe estará disponível.
latromi.formManager.setOnFormCreatedCallback( function(args) {
    
    // Cria o objeto "ViewerJS"
    ViewerJS = (function(iframe) {
    
        // Array com as informações adicionais 
        // que serão exibidas na barra superior
        var customInfoArray = [];
    
        // Habilita ou desabilita o download
        function _enableDownload(enabled) {
           var iframeDocument = iframe.contentDocument || iframe.contentWindow.document;
           if (iframeDocument){
              var iframeDownloadButton = iframeDocument.getElementById('download');
              if (iframeDownloadButton) iframeDownloadButton.style.display = (enabled ? '' : 'none');
           }        
           if (enabled) iframe.removeAttribute('data-disableDownload');
           else iframe.setAttribute('data-disableDownload', 'true');
        }
        
        // Adiciona um botão com informação customizada
        function _addCustomInfo(text) {
           var iframeDocument = iframe.contentDocument || iframe.contentWindow.document;
        
           var customButton = iframeDocument.createElement('button');
           customButton.innerHTML = text;
           customButton.className = 'toolbarButton textButton';
           
           var titlebarRight = iframeDocument.getElementById('titlebarRight');
           titlebarRight.insertBefore(customButton, titlebarRight.firstChild);
        }
        
        // Sempre que o documento for carregado, 
        // verifica se deve desabilitar o download e se tem informações para exibir
        iframe.addEventListener('load', function(e) {
           var form = latromi.formManager.getFormInstance();
           
           var disabled = iframe.getAttribute('data-disableDownload') === 'true';
           _enableDownload(!disabled);
           
           // Adiciona as informações customizadas
           for(var n=0; n < customInfoArray.length; n++)
               _addCustomInfo(customInfoArray[n]);
        });
        
        return {
            // Desabilita o download
            disableDownload: function() {
                _enableDownload(false);
            },
            // Abre um documento
            navigateTo: function(relativeUrl) {
                iframe.src = 'Public/ViewerJS/#../' + relativeUrl;
            },
            // Atualiza a url do documento
            update: function() {
                var form = latromi.formManager.getFormInstance();
                
                // Busca valor das variaveis
                var url = form.getVariableValue('url');
                var customInfo1 = form.getVariableValue('customInfo1');
                var customInfo2 = form.getVariableValue('customInfo2');
                
                // Adiciona no array
                customInfoArray.push(customInfo1);
                customInfoArray.push(customInfo2);
                
                this.navigateTo(url);
            }
        }
    })(document.getElementById('viewer'));
});
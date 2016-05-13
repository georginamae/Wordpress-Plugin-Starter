function createPage(_select,_data){
            var container = $(_select);
          
            var sources = function(){
                var result = [];

                for(var i = 0; i <  _data.length; i++){
                    result.push(_data[i]);
                }

                return result;
            }();

            var options = {
                dataSource: sources,
				pageSize:10,
                callback: function(response, pagination){
                    window.console && console.log(response, pagination);

                    var dataHtml = '<ul>';

                    $.each(response, function(index, item){
                        dataHtml += '<li>'+ item +'</li>';
                    });

                    dataHtml += '</ul>';

                    container.prev().html(dataHtml);
                }
            };

            //$.pagination(container, options);

            container.addHook('beforeInit', function(){
                window.console && console.log('beforeInit...');
            });
            container.pagination(options);

            container.addHook('beforePageOnClick', function(){
                window.console && console.log('beforePageOnClick...');
                //return false
            });

            return container;
        }

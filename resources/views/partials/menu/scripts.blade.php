
<script>
    // URL del endpoint
    const API_URL = '/menu';

    // Función para cargar el menú
    async function loadMenu() {
        const loadingEl = document.getElementById('loading');
        const errorEl = document.getElementById('error');
        const menuContentEl = document.getElementById('menu-content');
        const jsonContentEl = document.getElementById('json-content');

        // Mostrar loading
        loadingEl.style.display = 'block';
        errorEl.style.display = 'none';
        menuContentEl.innerHTML = '';

        try {
            // Hacer la petición al endpoint
            const response = await fetch(API_URL);
            
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }

            // Parsear la respuesta JSON
            const data = await response.json();
            
            // Mostrar los datos JSON
            jsonContentEl.textContent = JSON.stringify(data, null, 2);
            
            // Renderizar el menú
            renderMenu(data);
            
            // Ocultar loading
            loadingEl.style.display = 'none';
            
            console.log('Datos del menú cargados:', data);
            
        } catch (error) {
            console.error('Error al cargar el menú:', error);
            
            // Mostrar error
            loadingEl.style.display = 'none';
            errorEl.style.display = 'block';
            errorEl.textContent = `Error al cargar el menú: ${error.message}`;
            
            jsonContentEl.textContent = 'Error al cargar datos';
        }
    }

    // Función para renderizar el menú
    function renderMenu(data) {
        const menuContentEl = document.getElementById('menu-content');
        
        if (!data.menu) {
            menuContentEl.innerHTML = '<div class="error">No se encontraron datos de menú</div>';
            return;
        }

        const menu = data.menu;
        
        let html = `
            <div class="menu-item">
                <div class="menu-title">📁 ${menu.value}</div>
                <div class="menu-id">ID: ${menu.id}</div>
        `;

        if (menu.popup && menu.popup.menuitem) {
            html += `
                <div class="popup-menu">
                    <div class="popup-title">📋 Opciones del menú:</div>
                    <ul class="menu-options">
            `;

            menu.popup.menuitem.forEach(item => {
                html += `
                    <li class="menu-option" onclick="executeAction('${item.onclick}')">
                        ${item.value} (${item.onclick})
                    </li>
                `;
            });

            html += `
                    </ul>
                </div>
            `;
        }

        html += '</div>';
        menuContentEl.innerHTML = html;
    }

    // Función para ejecutar acciones del menú
    function executeAction(action) {
        console.log(`Ejecutando acción: ${action}`);
        
        // Simular la ejecución de las funciones
        switch(action) {
            case 'CreateNewDoc()':
                alert('🆕 Creando nuevo documento...');
                break;
            case 'OpenDoc()':
                alert('📂 Abriendo documento...');
                break;
            case 'CloseDoc()':
                alert('❌ Cerrando documento...');
                break;
            default:
                alert(`🔧 Ejecutando: ${action}`);
        }
    }

    // Función para limpiar el menú
    function clearMenu() {
        document.getElementById('menu-content').innerHTML = '';
        document.getElementById('json-content').textContent = 'Datos limpiados';
        document.getElementById('loading').style.display = 'none';
        document.getElementById('error').style.display = 'none';
    }

    // Cargar el menú al cargar la página
    document.addEventListener('DOMContentLoaded', function() {
        loadMenu();
    });

    // Función para hacer la petición con fetch y mostrar el proceso
    function showFetchProcess() {
        console.log('🔄 Iniciando petición fetch...');
        console.log(`📍 URL: ${API_URL}`);
        console.log('📤 Enviando petición GET...');
    }

    // Interceptar la petición para mostrar el proceso
    const originalFetch = window.fetch;
    window.fetch = function(...args) {
        showFetchProcess();
        return originalFetch.apply(this, args);
    };
</script>
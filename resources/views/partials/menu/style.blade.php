<style>
    .menu-page {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: calc(100vh - 200px);
        padding: 20px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .menu-container {
        background: white;
        border-radius: 15px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        padding: 30px;
        max-width: 600px;
        width: 100%;
        margin: 0 auto;
    }
    
    .menu-content-wrapper {
        background: #f8f9fa;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
    }

    .header {
        text-align: center;
        margin-bottom: 30px;
        padding-bottom: 20px;
        border-bottom: 2px solid #e9ecef;
    }

    .header h1 {
        color: #333;
        margin-bottom: 10px;
        font-size: 2.5em;
        font-weight: 700;
    }

    .header p {
        color: #666;
        font-size: 1.1em;
        margin-bottom: 0;
    }

    .menu-container {
        background: #f8f9fa;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
    }

    .menu-item {
        background: white;
        border-radius: 8px;
        padding: 15px;
        margin-bottom: 10px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        transition: transform 0.2s ease;
    }

    .menu-item:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    }

    .menu-title {
        font-size: 1.2em;
        font-weight: bold;
        color: #333;
        margin-bottom: 10px;
    }

    .menu-id {
        color: #666;
        font-size: 0.9em;
        margin-bottom: 15px;
    }

    .popup-menu {
        background: #e9ecef;
        border-radius: 6px;
        padding: 15px;
    }

    .popup-title {
        font-weight: bold;
        color: #495057;
        margin-bottom: 10px;
    }

    .menu-options {
        list-style: none;
    }

    .menu-option {
        background: white;
        border-radius: 4px;
        padding: 8px 12px;
        margin-bottom: 5px;
        cursor: pointer;
        transition: background-color 0.2s ease;
    }

    .menu-option:hover {
        background: #007bff;
        color: white;
    }

    .menu-option:last-child {
        margin-bottom: 0;
    }

    .loading {
        text-align: center;
        color: #666;
        font-style: italic;
    }

    .error {
        background: #f8d7da;
        color: #721c24;
        padding: 15px;
        border-radius: 8px;
        border: 1px solid #f5c6cb;
    }

    .json-display {
        background: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 6px;
        padding: 15px;
        margin-top: 20px;
    }

    .json-title {
        font-weight: bold;
        color: #495057;
        margin-bottom: 10px;
    }

    .json-content {
        background: #343a40;
        color: #f8f9fa;
        padding: 15px;
        border-radius: 4px;
        font-family: 'Courier New', monospace;
        font-size: 0.9em;
        overflow-x: auto;
        white-space: pre-wrap;
    }

    .button {
        background: #007bff;
        color: white;
        border: none;
        padding: 12px 24px;
        border-radius: 6px;
        cursor: pointer;
        font-size: 1em;
        transition: background-color 0.2s ease;
        margin: 5px;
    }

    .button:hover {
        background: #0056b3;
    }

    .button:disabled {
        background: #6c757d;
        cursor: not-allowed;
    }
    
    /* Ensure layout compatibility */
    .main-content {
        padding: 0;
    }
    
    .navbar {
        position: relative;
        z-index: 1030;
    }
    
    .footer {
        position: relative;
        z-index: 1020;
    }
</style>
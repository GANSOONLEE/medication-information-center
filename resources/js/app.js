import './bootstrap';
import { createApp } from 'vue' ;
import 'flowbite';
import '../css/app.css';

// Create vue instance 創建 Vue 實例
const app = createApp({});
window.Vue = app;

// Automatic register vue component 自動註冊 Vue 組件
const files = await import.meta.glob('./**/*.vue');
const modules = await Promise.all(
    Object.entries(files).map(async ([path, module]) => {
            const componentName = path.split('/').pop().split('.')[0];
            const { default: component } = await module();
            app.component(componentName, component);
            console.info(componentName, component);
    })
);

app.mount('#app')
import Prism from 'prismjs';
import 'prismjs/themes/prism-tomorrow.css'; // お好みのテーマ
import 'prismjs/components/prism-php';      // PHP用の言語定義

// Livewireの読み込み後や、ページ遷移時に実行
document.addEventListener('livewire:navigated', () => {
    Prism.highlightAll();
});
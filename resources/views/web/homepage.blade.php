<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <h3>Ini adalah halaman Homepage</h3>
    
    <div class="d-flex flex-wrap gap-4">
        <x-card title="Bootstrap" 
        content="Bootstrap adalah framework CSS populer yang memudahkan pengembangan web dengan desain responsif dan komponen siap pakai."
        image="https://aohige-life.com/wp-content/uploads/2023/04/bootstrap4.png"
        link="https://getbootstrap.com/" />
		
		<x-card title="CS50 Harvard" 
        content=" Kursus pengantar ilmu komputer dari Harvard."
        image="https://camo.githubusercontent.com/2485cdb92cc1563cb21703bd1dc5474a727cd17b4d8243b27b9906468ec4e945/68747470733a2f2f676f6f2e676c2f6d4a774e5543"
        link="https://www.edx.org/cs50" />
		
		<x-card title="HTML" 
        content="HTML (HyperText Markup Language) adalah bahasa dasar dalam pembuatan struktur halaman web."
        image="https://th.bing.com/th/id/R.e1d424c4b9be7009dd57ef4e7d58e343?rik=EZ8NO5x85jZ0Vg&riu=http%3a%2f%2f1.bp.blogspot.com%2f-NGHwBncyA68%2fUiMm_8b2ZUI%2fAAAAAAAAAnA%2f17OGXCKI4zE%2fs1600%2fLogo%2bHTML5.JPG&ehk=rnVe3RUksYQ4LMnsZ6Xxyf3F5lkj3Br1Eu6vOVCkYh0%3d&risl=&pid=ImgRaw&r=0"
        link="https://developer.mozilla.org/en-US/docs/Web/HTML" />
 
        <x-card title="Geeksforgeeks" 
        content="Artikel dan tutorial TI, algoritma, pemrograman, dan sistem komputer."
        image="https://play-lh.googleusercontent.com/ZI21NMObsjB7DbPU_EXRymHJL3HQpfsrB2N4CWb-diXm4xjl_13mmetYQZvcpgGf-64"
        link="https://www.geeksforgeeks.org/" />
		
		 <x-card title="CSS" 
        content="CSS (Cascading Style Sheets) digunakan untuk mengatur tampilan dan desain halaman web."
        image="https://fr.w3docs.com/uploads/media/book_gallery/0001/02/c8d75681dcd87da6f7d8ebfa0cdb40cbb403bed8.png"
        link="https://developer.mozilla.org/en-US/docs/Web/CSS" />

        <x-card title="MDN Web Docs" 
        content=" Dokumentasi lengkap untuk web development."
        image="https://i.ytimg.com/vi/Xnhnu7PViQE/maxresdefault.jpg"
        link="https://developer.mozilla.org/en-US/" />

        <x-card title="FreeCodeCamp" 
        content="Kursus coding gratis dengan sertifikat."
        image="https://design-style-guide.freecodecamp.org/img/fcc_secondary_small.svg"
        link="https://www.freecodecamp.org/" />
		
		<x-card title="Java" 
        content="Java adalah bahasa pemrograman yang banyak digunakan untuk pengembangan aplikasi web, desktop, dan mobile."
        image="https://th.bing.com/th/id/OIP.X8Po6UQLjtfpG7-_0SUISQHaFj?rs=1&pid=ImgDetMain"
        link="https://www.java.com/" />

        <x-card title="Java" 
        content="Tantangan coding dengan berbagai bahasa pemrograman."
        image="https://repository-images.githubusercontent.com/231893793/cec60480-04a9-11eb-80c4-df7359d94047"
        link="https://www.hackerrank.com/" />

    </div>

    <x-alert type="" message="" />
</x-layout>





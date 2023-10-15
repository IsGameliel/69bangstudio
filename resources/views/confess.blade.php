@extends('layouts.main')

@section('content')

<div class="container">
    <div class="confession">
        @include('includes/_confession_nav')
        <div class="top_section">
            <h2 class="confession_heading">Confession Online</h2>
            <div class="para">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, voluptate totam eos a
                    deserunt in qui magnam odit magni sunt eius similique quos maxime, reiciendis amet omnis autem rem doloribus.</p>
            </div>
            <div class="confess_form">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="54" viewBox="0 0 3.704 6.086">
                <g fill="#ff7177" fill-rule="evenodd" clip-rule="evenodd">
                    <path d="M3.428 4.762c0 .235-.193.428-.43.428H1.762l-.768.495L.97 5.19H.723c-.237 0-.43-.192-.43-.428V3.198c0-.236.193-.428.43-.428h2.276c.237 0 .43.192.43.428zm-.43-2.144H.824V1.363c0-.577.47-1.047 1.05-1.047.578 0 1.05.47 1.05 1.046v.22h.15v-.22c0-.66-.538-1.197-1.2-1.197C1.21.165.672.703.672 1.363V2.62c-.297.026-.53.276-.53.578v1.564c0 .32.26.58.58.58H.83l.028.614.952-.615H3c.32 0 .58-.26.58-.58V3.2c0-.32-.26-.582-.58-.582z"></path>
                    <path d="M2.136 3.852c0-.122-.1-.22-.222-.22-.123 0-.222.098-.222.22 0 .088.05.163.125.2v.314h.215v-.328c.062-.04.103-.108.103-.186z"></path>
                </g>
            </svg>
                <h1>Do penance and confess your sins</h1>
                <p class="p">all confessions will be posted anonymously</p>

                <form action="" class="mb-5">
                    <div class="form-group">
                        <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="container mt-5">
                        <div class="form-group">
                            <label for="">Add tag</label>
                            <input type="text" class="form-control" name="tag">
                            <p class="note">Press Enter, Comma or Spacebar to create a new tag, Backspace or Delete to remove the last one.</p>
                        </div>

                        <div class="form-group">
                            <label for="">Choose category</label>
                            <select name="category" id="" class="form-control">
                                <option value="Abuse">Abuse</option>
                                <option value="Adiction">Adiction</option>
                                <option value="Adultery">Adultery</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group d-grid mt-5">
                        <input type="submit" class="btn btn-danger btn-block btn-lg" name="button" value="Submit Confession">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

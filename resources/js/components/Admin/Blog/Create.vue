<template>
    <div class="card">
        <div class="card-header">
            Menambahkan Blog
        </div>
        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Content</label>
                    <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <select name="status" id="" class="form-control">
                        <option value="arsip">Arsipkan</option>
                        <option value="post">Post</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Tanggal Publish</label>
                    <input type="date" name="" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" name="file" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">ALT</label>
                    <input type="text" name="alt" id="" class="form-control">
                </div>
                <button class="btn btn-success">Simpan</button>
            </form>
        </div>
    </div>
</template>
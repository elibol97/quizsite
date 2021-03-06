<x-app-layout>
    <x-slot name="header">{{$quiz->title}} için Soru Oluştur</x-slot>
    <div class="card border-success mb-3">
        <div class="card-body text-success">
            <form action="{{route('questions.store',$quiz->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label>
                        Soru
                    </label>
                    <textarea name="question" class="form-control" rows="4">{{old('question')}}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label>
                        Fotoğraf
                    </label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label>
                                1.Cevap
                            </label>
                            <textarea name="answer1" class="form-control" rows="4">{{old('answer1')}}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group ">
                            <label>
                                2.Cevap
                            </label>
                            <textarea name="answer2" class="form-control" rows="4">{{old('answer2')}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>
                                3.Cevap
                            </label>
                            <textarea name="answer3" class="form-control" rows="4">{{old('answer3')}}</textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>
                                4.Cevap
                            </label>
                            <textarea name="answer4" class="form-control" rows="4">{{old('answer4')}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <label>
                        Doğru Cevap
                    </label>
                    <select name="correct_answer" class="form-control">
                        <option @if(old('correct_answer')==='answer1') selected @endif value="answer1">1. Cevap</option>
                        <option @if(old('correct_answer')==='answer2') selected @endif value="answer2">2. Cevap</option>
                        <option @if(old('correct_answer')==='answer3') selected @endif value="answer3">3. Cevap</option>
                        <option @if(old('correct_answer')==='answer4') selected @endif value="answer4">4. Cevap</option>
                    </select>
                </div>
                <div class="form-group text-center mt-3">
                    <button type="submit" class="btn btn-success btn-sm btn-block">Soru Oluştur</button>
                    <a href="{{route('quizzes.index')}}"><button type="button" class="btn btn-danger btn-sm btn-block">İşlemi İptal Et</button></a>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>

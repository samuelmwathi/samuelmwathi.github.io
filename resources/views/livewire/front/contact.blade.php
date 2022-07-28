<div class="col-lg-8">
    <form class="form-contact " action="{{ route('contact.submit') }}"  method="post"  novalidate="novalidate" autocomplete="off">
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" wire:model="message" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message" autocomplete="off"></textarea>
                    @error('message')
                    <small class="form-control-feedback"> {{ $message }} </small>
                    @enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input class="form-control valid" wire:model="name" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name" autocomplete="off">
                    @error('name')
                    <small class="form-control-feedback"> {{ $message }} </small>
                    @enderror
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <input class="form-control valid" wire:model="email" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email" autocomplete="off">
                    @error('email')
                    <small class="form-control-feedback"> {{ $message }} </small>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <input class="form-control" wire:model="phone" name="phone" id="phone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter phone number'" placeholder="Enter phone number" autocomplete="off">
                    @error('phone')
                    <small class="form-control-feedback"> {{ $message }} </small>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <input class="form-control" wire:model="subject" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject" autocomplete="off">
                    @error('subject')
                    <small class="form-control-feedback"> {{ $message }} </small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-group mt-3">
            <button type="button" wire:click="submitDetails" class="button button-contactForm boxed-btn">Send Message
                @if($loading)
                    <img class="img-responsive" style="max-height: 30px" src="{{ asset('loading.gif') }}">
                @endif
            </button>
        </div>
    </form>
</div>
